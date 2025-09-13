<?php

namespace App\Livewire\Product;

use App\Models\Company;
use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $showModal = false;
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
    public function newProduct()
    {
        Product::create([
            'name' => $this->newProductName,
            'company_id' => $this->company_id,
            'lifetime' => $this->newProductLife
        ]);
        $this->reset(['newProductName', 'newProductLife']);
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
    public function editProduct($id)
    {
        $currentProduct = Product::where('id', $id)->first();
        if ($currentProduct) {
            $this->currentProductId = $id;
            $this->currentProductName = $currentProduct->name;
            $this->currentProductLife = $currentProduct->lifetime;
        }
    }
    public function updateProduct()
    {
        Product::where('id', $this->currentProductId)->update(
            [
                'name' => $this->currentProductName,
                'lifetime' => $this->currentProductLife
            ]
        );
        $this->reset(['currentProductId', 'currentProductLife', 'currentProductName']);
        $this->updateData();
    }
    public function deleteProduct()
    {
        Product::where('id', $this->deleteProductId)->delete();
        $this->reset('deleteProductId');
        $this->updateData();
    }
    public function render()
    {
        return view('livewire.product.index');
    }
}
