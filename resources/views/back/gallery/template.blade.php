
@extends('back.layout')

@section('css')

<style>
  textarea { resize: vertical; }
  #custom_table {margin-bottom: 0px;}
  td {padding: 0px 8px !important;}
  .select2-container .select2-selection--single  {height: 35px !important}
</style>

<link href="{{ asset('adminlte/plugins/colorbox/colorbox.css') }}" rel="stylesheet">
<link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
@endsection

@section('main')

@yield('form-open')
{{ csrf_field() }}

<div class="row">

    <div class="col-md-12">
        @if (session('post-ok'))
        @component('back.components.alert')
        @slot('type')
        success
        @endslot
        {!! session('post-ok') !!}
        @endcomponent
        @endif

        @if (session('post-danger'))
        @component('back.components.alert')
        @slot('type')
        danger
        @endslot
        {!! session('post-danger') !!}
        @endcomponent
        @endif


        @component('back.components.box')
            @slot('type')
                primary
            @endslot
            @slot('boxTitle')
                Page Link
            @endslot


        <div class="form-group col-md-6">
            <label for="menus">Select Page</label>

               <select id="post_id" name="post_id" class="js-example-basic-single form-control" required="true">
                      @foreach($project_page as $id => $post_id)
                      <option value="{{ $id }}" {{($actual_project_page == $id)? 'selected' : ''}}>{{ $post_id }}</option>
                  @endforeach
              </select>
              <input type="hidden" id="actual_post" name="post_id" value="{{$actual_project_page}}"/>
        </div>

        @endcomponent

        <div id="tab">
          @include('back.partials.boxinput', [
          'box' => [
          'type' => 'box-primary',
          'title' => __('Content In Tab Section'),
          ],
          'input' => [
          'name' => 'tab_section',
          'value' => 'Y',
          'input' => 'checkbox',
          'label' => __('Yes'),
          ],
          ])
        </div>

        <div class="tabContent">

            <table class="table custom_table" id="custom_table" style="">
                  <thead></thead>
                    <tbody id="tbl1">
                       @if(empty($post_tabs))
                       <tr>
                        <td style="display:none;"><input type="hidden" name="content_id[]" value="0" class="tab_id"> </td>
                        <td>

                           @include('back.partials.boxinput', [
                           'box' => [
                           'type' => 'box-primary',
                           'title' => __('Title'),
                           ],
                           'input' => [
                           'name' => 'tab_title[0]',
                           'value' => isset($post_tabs) ? $post_tabs[0]->tab_title: '',
                           'input' => 'text',
                           'required' => false,
                           ],
                          ])
                        </td>
                        <td>

                    @component('back.components.boxinputs')
                    @slot('type')
                      primary
                    @endslot
                    @slot('boxTitle')
                        @lang('Image')
                    @endslot
                 {{--
                    <img id="tab_image" src="@isset($post) {{ $post->tab_image }} @endisset" alt="" class="img-responsive img-fluid tab_image"> --}}
                    {{-- @slot('footer') --}}
                        <div class="{{ $errors->has('tab_image') ? 'has-error' : '' }}">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <a href="" class="popup_selector_tab btn btn-primary" data-inputid_tab="tab_image">@lang('Select an image')</a>
                                </div>
                                <!-- /btn-group -->
                                <input class="form-control tab_image" type="text" id="tab_image[]" name="tab_image[]" value="{{ old('tab_image', isset($post) ? $post->tab_image : '') }}" required="true">
                            </div>
                            {!! $errors->first('tab_image', '<span class="help-block">:message</span>') !!}
                        </div>
                    {{-- @endslot --}}
                    @endcomponent


                       </td><td></td>

                   </tr>
                   @else
                   @foreach($post_tabs as $key=>$tabs)
                   <tr value="{{$tabs->id}}">
                    <td style="display:none;"><input type="hidden" name="content_id[]" value="{{$tabs->id}}" class="tab_id"> </td>
                    <td>
                        @include('back.partials.boxinput', [
                        'box' => [
                        'type' => 'box-primary',
                        'title' => __('Title'),
                        ],
                        'input' => [
                        'name' => 'tab_title['.$tabs->id.']['.$key.']',
                        'value' => isset($post_tabs) ? $tabs->tab_title: '',
                        'input' => 'text',
                        'required' => false,
                        ],
                        ])
                        </td>
                        <td>

                    @component('back.components.boxinputs')
                    @slot('type')
                       primary
                    @endslot
                    @slot('boxTitle')
                        @lang('Image')
                    @endslot

                 {{--    <img id="tab_image" src="@isset($post_tabs) {{ $tabs->tab_image }} @endisset" alt="" class="img-responsive img-fluid tab_image"> --}}

                    <div class="{{ $errors->has('tab_image') ? 'has-error' : '' }}">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <a href="" class="popup_selector_tab btn btn-primary tab_image" data-inputid_tab="tab_image" required="true">@lang('Select an image')</a>
                            </div>
                            <!-- /btn-group -->

                            {{Form::text('tab_image['.$tabs->id.']['.$key.']', isset($post_tabs) ? $tabs->tab_image : '', array('class'=>'form-control tab_image','id'=>'tab_image['.$tabs->id.']['.$key.']'))}}

                        </div>
                        {!! $errors->first('tab_image', '<span class="help-block">:message</span>') !!}
                    </div><br/>

                    @endcomponent

                    </td>
                    <td>
                      <a class="btn btn-danger btn-xs btn-block tbl_rem" style="margin-bottom: 15px;" href="javascript:void(0)"><i class="fa fa-remove"></i></a>
                    </td>
                </tr>
                @endforeach
                @endif

            </tbody>

        </table>


        <a class="btn btn-success btn-xs" style="margin: 0 10px 10px;" id='tbl_add' href="javascript:void(0)"><i class="fa fa-plus"></i></a>


    </div>

    {{-- @include('back.partials.boxinput', [
    'box' => [
    'type' => 'box-primary',
    'title' => __('Status'),
    ],
    'input' => [
    'name' => 'active',
    'value' => true,
    'input' => 'checkbox',
    'label' => __('Active'),
    ],
    ]) --}}

    <button type="submit" class="btn btn-primary" id="submitPost">@lang('Submit')</button>
    <a href="{{route('gallery.index')}}" class="btn btn-default">@lang('Cancel')</a>

</div>

</div>
<!-- /.row -->
</form>

@endsection

@section('js')

<script src="{{ asset('adminlte/plugins/colorbox/jquery.colorbox-min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/voca/voca.min.js') }}"></script>
<!--  <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script> -->
<script src="{{ asset('adminlte/plugins/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminlte/plugins/ckeditor/config.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();

        $('.js-example-basic-single').select2({
          placeholder: 'Select an option',
          // allowClear: true
      });

      $('#tab').hide();
      @if($actual_project_page == null)
        $('#post_id').attr('disabled', false);
        $('#actual_post').attr('disabled', true);
      @else
        $('#post_id').attr('disabled', true);
        $('#actual_post').attr('disabled', false);
      @endif
});

  $('.popup_selector_tab').click( function (event) {
      event.preventDefault()
      var updateID = $(this).attr('data-inputid_tab')
      var elfinderUrl = '/elfinder/popup/'
      var triggerUrl = elfinderUrl + updateID
      $.colorbox({
          href: triggerUrl,
          fastIframe: true,
          iframe: true,
          width: '70%',
          height: '70%'
        })
    })

    var $thisSeletedButton = null;
    $(document).on('click','.popup_selector_tab_new, .popup_selector_tab',function(){
       // alert($(this).parent().parent().find('input').attr('id'))
        $thisSeletedButton = $(this);
    })

   function processSelectedFile(filePath, requestingField) {
     $('#' + requestingField).val('\\' + 'storage/' +filePath)
     if(requestingField == 'tab_image')
     {
      $($thisSeletedButton).parent().parent().parent().parent().parent().find('.tab_image').attr('src', '\\' + 'storage/' +filePath)
      $($thisSeletedButton).parent().parent().parent().parent().parent().find('.tab_image').attr('value', '\\' + 'storage/' +filePath)
    }
  }

  $('#slug').keyup(function () {
      $(this).val(v.slugify($(this).val()))
  })

  $('#title').keyup(function () {
      $('#slug').val(v.slugify($(this).val()))
  })

 </script>


<script src="{{ asset('js/gallery.js') }}"></script>

<script src="{{ asset('adminlte/js/back.js') }}"></script>

@endsection
