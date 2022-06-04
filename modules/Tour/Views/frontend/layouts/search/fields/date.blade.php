<div class="form-group">
    <i class="field-icon icofont-wall-clock"></i>
    <div class="form-content">
        <div class="form-date-search">
            <div class="date-wrapper" >
                <div class="check-in-wrapper">
                    <label>{{ $field['title'] ?? "" }}</label>
                    <input type="text" class="border-0 text-primary" name="date"
                           id="datedropper"
                           data-dd-large-only="true"
                           placeholder="Select a date"
                           data-dd-format="d-m-Y"
                           value="{{ Request::query('date',date("Y-m-d"))}}">
                </div>
            </div>
        </div>
    </div>
</div>