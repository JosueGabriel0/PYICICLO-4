<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class Crudempresa extends Controller
{
    public $empresas, $empresa_nombre, $empresa_tipo_de_industria, $empresa_descripcion, $empresa_correo_electronico, $empresa_numero_de_telefono, $empresa_direccion_de_sedes, $empresa_requisitos_para_estudiantes_practicantes, $empresa_area_de_pracicas, $empresa_nombre_representante_encargado_de_PPP, $empresa_cargo_representante_encargado_de_PPP, $empresa_telefono_del_representante, $id_empresa;
    public $modal = false;

    public function render()
    {
        $this->empresas = Empresa::all();
        return view('livewire.crudempresa');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
    }

    public function limpiarCampos()
    {

        $this->empresa_nombre = '';
        $this->empresa_tipo_de_industria = '';
        $this->empresa_descripcion = '';
        $this->empresa_correo_electronico = '';
        $this->empresa_numero_de_telefono = '';
        $this->empresa_direccion_de_sedes = '';
        $this->empresa_requisitos_para_estudiantes_practicantes = '';
        $this->empresa_area_de_pracicas = '';
        $this->empresa_nombre_representante_encargado_de_PPP = '';
        $this->empresa_cargo_representante_encargado_de_PPP = '';
        $this->empresa_telefono_del_representante = '';
        $this->id_empresa = '';
    }

    public function editar($id)
    {


        $empresa = Empresa::findOrfail($id);

        $this->id_empresa = $id;
        $this->empresa_nombre = $empresa->empresa_nombre;
        $this->empresa_tipo_de_industria = $empresa->empresa_tipo_de_industria;
        $this->empresa_descripcion = $empresa->empresa_descripcion;
        $this->empresa_correo_electronico = $empresa->empresa_correo_electronico;
        $this->empresa_numero_de_telefono = $empresa->empresa_numero_de_telefono;
        $this->empresa_direccion_de_sedes = $empresa->empresa_direccion_de_sedes;
        $this->empresa_requisitos_para_estudiantes_practicantes = $empresa->empresa_requisitos_para_estudiantes_practicantes;
        $this->empresa_area_de_pracicas = $empresa->empresa_area_de_pracicas;
        $this->empresa_nombre_representante_encargado_de_PPP = $empresa->empresa_nombre_representante_encargado_de_PPP;
        $this->empresa_cargo_representante_encargado_de_PPP = $empresa->empresa_cargo_representante_encargado_de_PPP;
        $this->empresa_telefono_del_representante = $empresa->empresa_telefono_del_representante;

        $this->abrirModal();


    }

    public function borrar($id)
    {
        Empresa::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {




        Empresa::updateOrCreate(
            ['id' => $this->id_empresa],
            [


                'empresa_nombre' => $this->empresa_nombre,
                'empresa_tipo_de_industria' => $this->empresa_tipo_de_industria,
                'empresa_descripcion' => $this->empresa_descripcion,
                'empresa_correo_electronico' => $this->empresa_correo_electronico,
                'empresa_numero_de_telefono' => $this->empresa_numero_de_telefono,
                'empresa_direccion_de_sedes' => $this->empresa_direccion_de_sedes,
                'empresa_requisitos_para_estudiantes_practicantes' => $this->empresa_requisitos_para_estudiantes_practicantes,
                'empresa_area_de_pracicas' => $this->empresa_area_de_pracicas,
                'empresa_nombre_representante_encargado_de_PPP' => $this->empresa_area_de_pracicas,
                'empresa_cargo_representante_encargado_de_PPP' => $this->empresa_cargo_representante_encargado_de_PPP,
                'empresa_telefono_del_representante' => $this->empresa_telefono_del_representante



            ]

        );

        session()->flash(
            'message',
            $this->id_empresa ? '¡Actualización exitosa!' : '¡Registrado Exitosamente!'
        );

        $this->cerrarModal();
        $this->limpiarCampos();
    }

    public function store(Request $request)
    {

        $campos = [
            'empresa_nombre' => 'required|string|max:100',
            'empresa_tipo_de_industria' => 'required|string|max:100',
            'empresa_descripcion' => 'required|string|max:100',
            'empresa_correo_electronico' => 'required|string|max:100',
            'empresa_numero_de_telefono' => 'required|string|max:100',
            'empresa_direccion_de_sedes' => 'required|string|max:100',
            'empresa_requisitos_para_estudiantes_practicantes' => 'required|string|max:100',
            'empresa_telefono_del_representante' => 'required|string|max:100',


        ];
        $mensaje = [
            'empresa_nombre.required' => 'El nombre es requerido',
            'empresa_tipo_de_industria.required' => 'El tipo de industria es requerida',
            'empresa_descripcion.required' => 'La descripcion es requerida',
            'empresa_correo_electronico.required' => 'El correo es requerido',
            'empresa_numero_de_telefono.required' => 'El telefono es requerido',
            'empresa_direccion_de_sedes.required' => 'Las direcciones de sedes son requeridas',
            'empresa_requisitos_para_estudiantes_practicantes.required' => 'Los rquisitos para estudiantes practicantes requerido',
            'empresa_telefono_del_representante.required' => 'El telefono del representante del representante requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosempresa = request()->except('_token');

        Empresa::insert($datosempresa);

        //return response()->json($datosinstitucion);
        return redirect('livewire.crudempresa')->with('mensaje', 'Empleado agregado con éxito');
    }

    public function rules()
    {


        $campos = [
            'empresa_nombre' => 'required|string|max:100',
            'empresa_tipo_de_industria' => 'required|string|max:100',
            'empresa_descripcion' => 'required|string|max:100',
            'empresa_correo_electronico' => 'required|string|max:100',
            'empresa_numero_de_telefono' => 'required|string|max:100',
            'empresa_direccion_de_sedes' => 'required|string|max:100',
            'empresa_requisitos_para_estudiantes_practicantes' => 'required|string|max:100',
            'empresa_telefono_del_representante' => 'required|string|max:100',


        ];
        $mensaje = [
            'empresa_nombre.required' => 'El nombre es requerido',
            'empresa_tipo_de_industria.required' => 'El tipo de industria es requerida',
            'empresa_descripcion.required' => 'La descripcion es requerida',
            'empresa_correo_electronico.required' => 'El correo es requerido',
            'empresa_numero_de_telefono.required' => 'El telefono es requerido',
            'empresa_direccion_de_sedes.required' => 'Las direcciones de sedes son requeridas',
            'empresa_requisitos_para_estudiantes_practicantes.required' => 'Los rquisitos para estudiantes practicantes requerido',
            'empresa_telefono_del_representante.required' => 'El telefono del representante del representante requerido'
        ];
    }


}
