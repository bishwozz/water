<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImportRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ImportCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ImportCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Import::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/import');
        CRUD::setEntityNameStrings('import', 'imports');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
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
        CRUD::setValidation(ImportRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        CRUD::addFields([

            [
                'name' => 'product',
                'type' => 'text',
                'label' => 'ProductsName',
                'wrapper' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            [
                'name' => 'quan',
                'type' => 'text',
                'label' => 'Quantity',
                'wrapper' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            [
                'name' => 'sold',
                'type' => 'text',
                'label' => 'Sold No',

                'wrapper' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            [
                'name' => 'impo',
                'type' => 'text',
                'label' => 'Imported',
                'wrapper' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            [
                'name' => 'stock',
                'type' => 'text',
                'label' => 'Stock',
                'wrapper' => [
                    'class' => 'form-group col-md-4',
                ],
            ],

            [
                'name' => 'total',
                'type' => 'text',
                'label' => 'Total',
                'wrapper' => [
                    'class' => 'form-group col-md-4',
                ],
            ],

        ]);

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
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
}
