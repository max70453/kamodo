<div class="modal fade" id="editColorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">{{ __('Изменить цвет') }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" enctype="multipart/form-data" class="editColor">
            @method('PUT')
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <label for="">{{ __('Название*') }}</label>
                    <input type="text" class="form-control color" name="colorName" value="">
                </div>
                <div class="col">
                    <label for="">{{ __('HEX код*') }}</label>
                    <input type="color" class="form-control code" name="colorCode" value="">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">{{ __('Сохранить') }}</button>
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>
</div>

