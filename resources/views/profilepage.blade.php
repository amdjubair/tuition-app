@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a style="font-size: 30px">{{ __('Profile Of  : ') . $user->name}}</a></div>
                <div class="card-body">
                   
                      

                        <div class="form-group row">
                            <label name="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                             <div class="col-md-4 list-group-item">
                                
                                {{$user->name}}
                                </div>

                          </div>

                          <div class="form-group row">
                            <label name="name" class="col-md-4 col-form-label text-md-right">{{ __('Institute') }}</label>

                             <div class="col-md-4 list-group-item">
                                
                                {{$user->institute}}
                                </div>

                          </div>

                        <div class="form-group row">
                            <label name="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                             <div class="col-md-6">
                               <a href="mailto:{{$user->email}}"> {{$user->email}}</a>
                                </div>

                        </div>

                        <div class="form-group row">
                            <label name="Address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                             <div class="col-md-6">
                                {{$user->address}} 
                                   
                                </div>

                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact No') }}</label>

                            <div class="col-md-6">
                                {{$user->contact}}
                            </div>
                        </div>

                        


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>
                                 <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Delete') }}
                                </button>
                            </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
