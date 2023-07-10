<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JalanRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class JalanCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class JalanCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Jalan::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/jalan');
        CRUD::setEntityNameStrings('jalan', 'Jalan');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('nomor_ruas');
        CRUD::column('nama_ruas');
        CRUD::column('panjang_label')->label('Panjang');
        CRUD::column('created_at')->label("dibuat");
        CRUD::column('updated_at')->label('diupdate');
        $this->crud->addButtonFromView('top', 'export_jalan', 'export-button-jalan', 'end');
        $this->crud->addButtonFromView('top', 'print_jalan', 'print-button-jalan', 'end');


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
        CRUD::setValidation(JalanRequest::class);

        CRUD::field('nomor_ruas');
        CRUD::field('nama_ruas');
        CRUD::field('panjang')->suffix('km');

        $this->crud->setValidation([
            'nomor_ruas'=>'required',
            'nama_ruas'=>'required',
            'panjang'=>'required|numeric',
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

    protected function setupShowOperation(){
        CRUD::column('nomor_ruas');
        CRUD::column('nama_ruas');
        CRUD::column('panjang_label')->label('Panjang');
        CRUD::column('created_at')->label("dibuat");
        CRUD::column('updated_at')->label('diupdate');
    }
}
