@can('product_variation_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.product-variations.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.productVariation.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.productVariation.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-variationProductVariations">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.productVariation.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.productVariation.fields.product') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.price') }}
                        </th>
                        <th>
                            {{ trans('cruds.productVariation.fields.variation') }}
                        </th>
                        <th>
                            {{ trans('cruds.productVariation.fields.price') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productVariations as $key => $productVariation)
                        <tr data-entry-id="{{ $productVariation->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $productVariation->id ?? '' }}
                            </td>
                            <td>
                                {{ $productVariation->product->name ?? '' }}
                            </td>
                            <td>
                                {{ $productVariation->product->price ?? '' }}
                            </td>
                            <td>
                                {{ $productVariation->variation->name ?? '' }}
                            </td>
                            <td>
                                {{ $productVariation->price ?? '' }}
                            </td>
                            <td>
                                @can('product_variation_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.product-variations.show', $productVariation->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('product_variation_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.product-variations.edit', $productVariation->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('product_variation_delete')
                                    <form action="{{ route('admin.product-variations.destroy', $productVariation->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('product_variation_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.product-variations.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-variationProductVariations:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection