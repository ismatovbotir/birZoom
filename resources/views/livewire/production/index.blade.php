<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">

                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner p-0">
                                <table class="nk-tb-list nk-tb-ulist">
                                    <thead>
                                        <tr class="nk-tb-item nk-tb-head">

                                            <th class="nk-tb-col"><span class="sub-text">Maxsulot Nomi</span></th>
                                            <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Yaroqlik
                                                    muddati(soat)</span>
                                            </th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Ishlab
                                                    chiqarilgan</span></th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Yaroqsizlik</span>
                                            </th>

                                        </tr><!-- .nk-tb-item -->
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $prd)
                                            @php
                                                $table_color = '';
                                                if ($prd->expires_at < now()) {
                                                    $table_color = 'table-danger';
                                                }

                                            @endphp
                                            <tr class="nk-tb-item {{ $table_color }}" wire:key="{{ $prd->id }}">

                                                <td class="nk-tb-col">

                                                    <div class="product-info">
                                                        <h6 class="title">{{ $prd->product->name }}</h6>
                                                    </div>

                                                </td>
                                                <td class="nk-tb-col tb-col-xxl">
                                                    <span>{{ $prd->product->lifetime }}</span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span>
                                                        {{ $prd->created_at }}
                                                    </span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span>
                                                        {{ $prd->expires_at }}
                                                    </span>
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

</div>
