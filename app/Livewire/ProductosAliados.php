<?php

namespace App\Livewire;

use App\Models\Promociones;
use App\Models\Monedas;
use App\Models\Puntos;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class ProductosAliados extends Component
{
    use WithPagination;

    public $buscar = '';
    public $perPage = 10;
    public $idUsuario;
    public $productoSeleccionado;
    public $cargandoProducto = false; // Nueva propiedad para controlar el estado de carga

    public function mount($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }


    public function render()
    {
        $productos = Promociones::with(['detallePromociones.monedas', 'imagenes'])
            ->where('estado', 1)
            ->where('users_id', $this->idUsuario)
            ->where(function ($query) {
                $query->where('nombre', 'like', '%' . $this->buscar . '%')
                    ->orWhere('descripcion', 'like', '%' . $this->buscar . '%');
            })
            ->select('id', 'nombre', 'descripcion')
            ->paginate($this->perPage);

        // Obtener todas las monedas activas
        $monedas = Monedas::where('estado', 1)
            ->with(['imagenes' => function ($query) {
                $query->select('url', 'imagenable_id');
            }])
            ->get(['id', 'nombre', 'descripcion']);

        $userId = Auth::id();

        return view('livewire.productosAliado', compact('productos', 'monedas', 'userId'));
    }

    public function abrirModalQuickAdd($productoId)
    {
        if ($this->cargandoProducto) {
            return; // Si ya se está cargando un producto, no hacer nada
        }

        $this->cargandoProducto = true; // Marcar que se está cargando un producto
        $this->dispatch('cargarProducto', productoId: $productoId);
    }

    #[On('cargarProducto')]
    public function cargarProducto(int $productoId)
    {
        // Cargar el producto seleccionado
        $producto = Promociones::with('detallePromociones.monedas', 'imagenes')->find($productoId);
        
        // Obtener la moneda del usuario con respecto al id del detalle de la promoción
        $userId = Auth::id();

        // Acceder al primer detalle de promoción y su moneda
        $detallePromocion = $producto->detallePromociones->monedas_id;
        $detalleMonedaId = $detallePromocion;

        if ($detalleMonedaId) {
            // Buscar en la tabla `puntos` la moneda específica para el usuario
            $detalleMonedaUsuario = Puntos::where('users_id', $userId)
                ->where('monedas_id', $detalleMonedaId)
                ->sum('puntos');

            $monedaUsuario = Monedas::where('id', $detalleMonedaId)->first();
           
            if ($detalleMonedaUsuario) {
                // Asignar la información de la moneda y los puntos al producto
                $producto->moneda = [
                    'id' => $detalleMonedaId,
                    'nombre' => $monedaUsuario->nombre,
                    'descripcion' => $monedaUsuario->descripcion,
                    'puntos' => $detalleMonedaUsuario,
                    'imagen_url' => $monedaUsuario->imagenes->url ?? 'ruta/a/imagen/predeterminada.jpg',

                    // Puedes agregar más atributos de la moneda si deseas
                ];

            }

            // Emitir el evento `mostrarModalQuickAdd` con los datos del producto
            $this->dispatch('mostrarModalQuickAdd', producto: $producto);
        }

        $this->cargandoProducto = false; // Marcar que se ha terminado de cargar el producto
    }


    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;
        $this->gotoPage(1);
    }
}
