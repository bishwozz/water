<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Models\Product;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
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

        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/products');
        CRUD::setEntityNameStrings('products', 'products');
        // $this->addFilters();
        // CRUD::enableExportButtons();

        /**
         * Define what happens when the List operation is loaded.
         *
         * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
         * @return void
         */
    }
    // public function addFilters()
    // {$user = backpack_user();

    //     $this->crud->addfilter(
    //         [
    //             'name' => 'name',
    //             'label' => 'Name ',
    //             'type' => 'text',
    //         ], function () {
    //             return Product::all()->pluck('name', 'id')->toArray();
    //         }, function ($value) {

    //             $this->crud->addClause('where', 'name', 'LIKE', '%' . $value . '%');

    //         }
    //     );
    // }

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
        CRUD::setValidation(ProductsRequest::class);
        CRUD::setFromDb();

        // set fields from db columns.
        CRUD::addFields([
            ['name' => 'image',
                'type' => 'image',
                'label' => 'image',
                'wrapper' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            // [ // WYSIWYG Editor
            //     'name' => 'description',
            //     'label' => 'Description',
            //     'type' => 'wysiwyg',
            // ],
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
