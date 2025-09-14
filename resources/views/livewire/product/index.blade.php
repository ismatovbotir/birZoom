<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Products</h3>
                            <div class="nk-block-des text-soft">
                                <!-- <p>Client Report details.</p> -->
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                    data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">

                                        <li class="nk-block-tools-opt">
                                            <button class="btn btn-primary" wire:click="modalForm('add',true)"><em
                                                    class="icon ni ni-plus"></em>
                                                <span>Add Product</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner p-0">
                                <table class="nk-tb-list nk-tb-ulist">
                                    <thead>
                                        <tr class="nk-tb-item nk-tb-head">
                                            <th class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="pid-all">
                                                    <label class="custom-control-label" for="pid-all"></label>
                                                </div>
                                            </th>
                                            <th class="nk-tb-col"><span class="sub-text">Maxsulot Nomi</span></th>
                                            <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Yaroqlik
                                                    muddati(soat)</span>
                                            </th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Thumbnail</span></th>
                                            <th class="nk-tb-col nk-tb-col-tools text-right">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="btn btn-xs btn-trigger btn-icon dropdown-toggle mr-n1"
                                                        data-toggle="dropdown" data-offset="0,5"><em
                                                            class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-check-round-cut"></em><span>Mark
                                                                        As Done</span></a></li>
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-archive"></em><span>Mark As
                                                                        Archive</span></a></li>
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-trash"></em><span>Remove
                                                                        Projects</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr><!-- .nk-tb-item -->
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $prd)
                                            <tr class="nk-tb-item" wire:key="{{ $prd->id }}">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="{{ $prd->id }}">
                                                        <label class="custom-control-label" for="pid-01"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <a wire:click.prevent="modalForm('edit',true,'{{ $prd->id }}')"
                                                        href="#" class="project-title">
                                                        <div class="product-info">
                                                            <h6 class="title">{{ $prd->name }}</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span>{{ $prd->lifetime }}</span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span class="user-avatar md"><img src=""
                                                            alt=""></span>
                                                </td>

                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#"
                                                                    class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                    data-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        {{-- <li><a href="#" data-toggle="modal"
                                                                                data-target="#viewProduct"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Product</span></a></li> --}}
                                                                        <li><a wire:click.prevent="modalForm('edit',true,'{{ $prd->id }}')"
                                                                                href="#"><em
                                                                                    class="icon ni ni-edit"></em><span>Edit
                                                                                    Product</span></a></li>
                                                                        <li><a href="#"
                                                                                wire:click.prevent="modalForm('delete',true,'{{ $prd->id }}')"><em
                                                                                    class="icon ni ni-delete"></em><span>Delete
                                                                                    Product</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                        @endforeach

                                    </tbody>
                                </table><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->
                            {{-- <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        <ul class="pagination justify-content-center justify-content-md-start">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><span class="page-link"><em
                                                        class="icon ni ni-more-h"></em></span></li>
                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul><!-- .pagination -->
                                    </div>
                                    <div class="g">
                                        <div
                                            class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                            <div>Page</div>
                                            <div>
                                                <select class="form-select form-select-sm select2-hidden-accessible"
                                                    data-search="on" data-dropdown="xs center" data-select2-id="1"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option value="page-1" data-select2-id="3">1</option>
                                                    <option value="page-2">2</option>
                                                    <option value="page-4">4</option>
                                                    <option value="page-5">5</option>
                                                    <option value="page-6">6</option>
                                                    <option value="page-7">7</option>
                                                    <option value="page-8">8</option>
                                                    <option value="page-9">9</option>
                                                    <option value="page-10">10</option>
                                                    <option value="page-11">11</option>
                                                    <option value="page-12">12</option>
                                                    <option value="page-13">13</option>
                                                    <option value="page-14">14</option>
                                                    <option value="page-15">15</option>
                                                    <option value="page-16">16</option>
                                                    <option value="page-17">17</option>
                                                    <option value="page-18">18</option>
                                                    <option value="page-19">19</option>
                                                    <option value="page-20">20</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--default"
                                                    dir="ltr" data-select2-id="2" style="width: 45px;"><span
                                                        class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            role="combobox" aria-haspopup="true"
                                                            aria-expanded="false" tabindex="0"
                                                            aria-disabled="false"
                                                            aria-labelledby="select2-yz0e-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-yz0e-container" role="textbox"
                                                                aria-readonly="true" title="1">1</span><span
                                                                class="select2-selection__arrow"
                                                                role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <div>OF 102</div>
                                        </div>
                                    </div><!-- .pagination-goto -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .card-inner --}}
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
    <!--modal -->
    @if ($addProductForm)
        <div class="modal fade show" id="addProduct" aria-modal="true" role="dialog"
            style="display:block; padding-left:0px;">

            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <a href="#" wire:click.prevent="modalForm('add',false)" class="close">
                        <em class="icon ni ni-cross-sm"></em>
                    </a>
                    <div class="modal-body modal-body-md">
                        <h5 class="modal-title">Yangi Maxsulot</h5>

                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="name">Maxsulot nomi</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="name"
                                            wire:model="newProductName" required="" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="code">Yaroqlik vaqti</label>
                                    <div class="form-control-wrap">
                                        <input type="text" wire:model="newProductLife" class="form-control"
                                            id="code" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="file">Maxsulot Rasmi</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" multiple="" class="custom-file-input"
                                                id="file" disabled>
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="col-12">
                                <div class="form-group">
                                    <button data-dismiss="modal" wire:click="newProduct()"
                                        class="btn btn-primary">Add
                                        Product</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif
    @if ($editProductForm)
        <div class="modal fade show" id="editProduct" aria-modal="true" role="dialog"
            style="display:block; padding-left:0px;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <a href="#" class="close" wire:click.prevent="modalForm('edit',false)">
                        <em class="icon ni ni-cross-sm"></em>
                    </a>
                    <div class="modal-body modal-body-md">
                        <h5 class="modal-title">Edit Product</h5>


                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-name">Maxsulot nomi</label>
                                    <div class="form-control-wrap">
                                        <input wire:model="currentProductName" type="text" class="form-control"
                                            id="edit-name" value="{{ $currentProductName }}" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-code">Maxsulot yaroqlik muddati</label>
                                    <div class="form-control-wrap">
                                        <input wire:model="currentProductLife" type="text" class="form-control"
                                            id="edit-code" value="{{ $currentProductLife }}">
                                    </div>
                                </div>
                            </div>





                            <div class="col-12">
                                <div class="form-group">
                                    <button wire:click="updateProduct" data-dismiss="modal"
                                        class="btn btn-primary">Update
                                        Product</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div><!-- .Edit Modal-Content -->
    @endif
    @if ($deleteProductForm)
        <div class="modal fade show" id="deleteProduct" aria-modal="true" role="dialog"
            style="display:block; padding-left:0px;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-sm text-center">
                        <div class="nk-modal py-4">
                            <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                            <h4 class="nk-modal-title">Are You Sure ?</h4>
                            <div class="nk-modal-text mt-n2">
                                <p class="text-soft">This product will be removed permanently.</p>
                            </div>
                            <ul class="d-flex justify-content-center gx-4 mt-4">
                                <li>
                                    <button wire:click="deleteProduct" id="deletePD" class="btn btn-success">Yes,
                                        Delete
                                        it</button>
                                </li>
                                <li>
                                    <button data-dismiss="modal" wire:click="modalForm('delete',false,'')"
                                        class="btn btn-danger btn-dim">Cancel</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .Delete Modal-content -->
    @endif
</div>
