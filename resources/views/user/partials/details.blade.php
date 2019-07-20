<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="first_name">@lang('app.role')</label>
            {!! Form::select('role_id', $roles, $edit ? $user->role->id : '',
                ['class' => 'form-control', 'id' => 'role_id', $profile ? 'disabled' : '']) !!}
        </div>
        <div class="form-group">
            <label for="status">@lang('app.status')</label>
            {!! Form::select('status', $statuses, $edit ? $user->status : '',
                ['class' => 'form-control', 'id' => 'status', $profile ? 'disabled' : '']) !!}
        </div>
        <div class="form-group">
            <label for="first_name">@lang('app.first_name')</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="@lang('app.first_name')" value="{{ $edit ? $user->first_name : '' }}">
        </div>
        <div class="form-group">
            <label for="last_name">@lang('app.last_name')</label>
            <input type="text" class="form-control" id="last_name"
                   name="last_name" placeholder="@lang('app.last_name')" value="{{ $edit ? $user->last_name : '' }}">
        </div>
        <div class="form-group">
            <label for="mt4id">เลขบัญชี MT4</label>
            <input type="text" class="form-control" id="mt4id"
                   name="mt4id" placeholder="เลขบัญชี MT4 ของคุณ" value="{{ $edit ? $user->mt4id : '' }}">
        </div>
        <div class="form-group">
            <label for="mt4pw">รหัสผ่านบัญชี MT4</label>
            <input type="text" class="form-control" for="mt4pw"
                   name="mt4pw" for="mt4pw" placeholder="รหัส MT4 ของคุณ" value="{{ $edit ? $user->mt4pw : '' }}">
        </div>
        <div class="form-group">
            <label for="mt4server">เซิร์ฟเวอร์ MT4</label>
                <select name="mt4server" id="mt4server" class="form-control" value="{{ $edit ? $user->mt4server : '' }}">
                    <option>WindsorBrokers-REAL</option>
                    <option>InfinoxCapital-Live03</option>
                </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="birthday">@lang('app.date_of_birth')</label>
            <div class="form-group">
                <input type="text"
                       name="birthday"
                       id='birthday'
                       value="{{ $edit && $user->birthday ? $user->present()->birthday : '' }}"
                       class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <label for="phone">@lang('app.phone')</label>
            <input type="text" class="form-control" id="phone"
                   name="phone" placeholder="@lang('app.phone')" value="{{ $edit ? $user->phone : '' }}">
        </div>
        <div class="form-group">
            <label for="address">@lang('app.address')</label>
            <input type="text" class="form-control" id="address"
                   name="address" placeholder="@lang('app.address')" value="{{ $edit ? $user->address : '' }}">
        </div>
        <div class="form-group">
            <label for="address">@lang('app.country')</label>
            {!! Form::select('country_id', $countries, $edit ? $user->country_id : '', ['class' => 'form-control']) !!}
        </div>
    </div>

    @if ($edit)
        <div class="col-md-12 mt-2">
            <button type="submit" class="btn btn-primary" id="update-details-btn">
                <i class="fa fa-refresh"></i>
                @lang('app.update_details')
            </button>
        </div>
    @endif
</div>
