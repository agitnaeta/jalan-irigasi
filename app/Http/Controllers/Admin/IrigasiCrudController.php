<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IrigasiRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class IrigasiCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class IrigasiCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Irigasi::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/irigasi');
        CRUD::setEntityNameStrings('irigasi', 'Irigasi');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('nama_daerah');
        CRUD::column('luas_area_label')->label('Luas Area');
        CRUD::column('panjang_label')->label('Panjang');
        CRUD::column('lebar_label')->label('Lebar');
        CRUD::column('desa');
        CRUD::column('keterangan');
        CRUD::column('created_at')->label("dibuat");
        CRUD::column('updated_at')->label('diupdate');
        $this->crud->addButtonFromView('top', 'export_irigasi', 'export-button-irigasi', 'end');

        $this->crud->addButtonFromView('top', 'print_irigasi', 'print-button-irigasi', 'end');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(IrigasiRequest::class);

        CRUD::field('nama_daerah');
        CRUD::field('luas_area')->suffix('ha');
        CRUD::field('panjang')->suffix('m');
        CRUD::field('lebar')->suffix('m');
        CRUD::field('desa');
        CRUD::field('keterangan');

        $this->crud->setValidation([
            'nama_daerah'=>'required',
            'luas_area'=>'required|numeric',
            'panjang'=>'required|numeric',
            'lebar'=>'required|numeric',
            'desa'=>'required',
        ],[
            'required'=>':attribute  tidak boleh kosong',
            'numeric'=>':attribute  harus berupa angka'
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function setupShowOperation(){
        CRUD::column('nama_daerah');
        CRUD::column('luas_area_label')->label('Luas Area');
        CRUD::column('panjang_label')->label('Panjang');
        CRUD::column('lebar_label')->label('Lebar');
        CRUD::column('desa');
        CRUD::column('keterangan');
        CRUD::column('created_at')->label("dibuat");
        CRUD::column('updated_at')->label('diupdate');
    }

}
