<?php

namespace App\Livewire\Product;

use App\Models\Company;
use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $addProductForm = false;
    public $editProductForm = false;
    public $deleteProductForm = false;
    public $data = [];
    public $company_id = '';
    public $newProductName = '';
    public $newProductLife = 1;
    public $currentProductId = '';
    public $currentProductName = '';
    public $currentProductLife = '';
    public $deleteProductId = '';
    public function mount()
    {
        $this->updateData();
    }
    public function selectProduct($id)
    {
        $this->deleteProductId = $id;
    }

    public function modalForm($name, $status, $id = '')
    {
        switch ($name) {
            case 'add':

                $this->addProductForm = $status;
                break;
            case 'edit':
                $this->editProductForm = $status;
                $currentProduct = Product::where('id', $id)->first();
                if ($currentProduct) {
                    $this->currentProductId = $id;
                    $this->currentProductName = $currentProduct->name;
                    $this->currentProductLife = $currentProduct->lifetime;
                }

                break;
            case 'delete':
                $this->currentProductId = $id;
                $this->deleteProductForm = $status;
                break;
        }
    }

    public function newProduct()
    {
        Product::create([
            'name' => $this->newProductName,
            'company_id' => $this->company_id,
            'lifetime' => $this->newProductLife
        ]);
        $this->reset(['newProductName', 'newProductLife', 'addProductForm']);

        $this->updateData();
    }
    public function updateData()
    {
        $company = Company::first();
        //dd($company);
        $this->company_id = $company->id;
        $this->data = Product::where('company_id', $company->id)->get();

        //dd($this->data);
    }

    public function updateProduct()
    {
        Product::where('id', $this->currentProductId)->update(
            [
                'name' => $this->currentProductName,
                'lifetime' => $this->currentProductLife
            ]
        );
        $this->reset(['currentProductId', 'currentProductLife', 'currentProductName', 'editProductForm']);
        $this->updateData();
    }
    public function deleteProduct()
    {
        Product::where('id', $this->currentProductId)->delete();
        $this->reset('currentProductId');
        $this->deleteProductForm = false;
        $this->updateData();
    }
    public function render()
    {
        return view('livewire.product.index');
    }
}
