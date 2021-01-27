@extends('layouts.app')

@section('content')
<div class="container banner-content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cotact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control" name="contact" required>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"   >Tutor/Student's Institute:</label>
                               <div class="col-md-6">
                                  <select  name="institute" class="form-control" required="required" >
                                    <option value="SUST" >SUST</option>
                                    <option value="DU" >DU</option>
                                    <option value="BUTEX" >BUTEX</option>
                                    <option value="JU" >JU</option>
                                    <option value="JNU" >JNU</option>
                                    <option value="KUET" >KUET</option>
                                    <option value="RUET" >RUET</option>
                                    <option value="CUET" >CUET</option>
                                    <option value="IUT" >IUT</option>
                                    <option value="MIST" >MIST</option>
                                    <option value="BAU" >BAU</option>
                                    <option value="Blue-bird" >Blue-bird</option>
                                    <option value="ScholarsHome" >ScholarsHome</option>
                                      <option value="Sylhet Govt Pilot" >Sylhet Govt Pilot</option>
                                        <option value="MC College" >MC College</option>


                                  </select>     
                                </div>
                         </div>

                         <div class="form-group row">
                             <label class="col-md-4 col-form-label text-md-right">class:</label>
                             <div class="col-md-6">
                               <select id='class' class="form-control" name="class[]"  required="required" multiple="multiple" >
                                    <option value='8'>8</option>
                                    <option value='9'>9</option>
                                    <option value='10'>10</option>
                                    <option value='11'>11</option>
                                    <option value='12'>12</option>
                                  </select>
                             </div>
                         </div>

                         <div class="form-group row">
                             <label class="col-md-4 col-form-label text-md-right"  >Subjects:</label>
                               <div class="col-md-6">
                                  <select id='subject' name='subject[]' multiple class="form-control" required="required" >
  
                                      <option value='Physics'>Physics</option>
                                    
                                      <option value='Chemistry'>Chemistry</option>
                                    
                                      <option value='Math'>Math</option>
                                      <option value='Biology'>Biology</option>
                                    
                                      <option value='Ict'>ICT</option>
                                    
                                      <option value='English'>English</option>
                                    
                                  </select>
                                </div>
                            </div>

                             <label for="alert" class="col-md-9 col-form-label text-md-right">{{ __('Note: press ctrl button to select mutiple subjects and classes') }}</label>

                            <div class="col-md-6">
                                
                            </div>

                         <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('SignUp as: ') }}</label>

                            <div class="col-md-6">
                                <select   class="form-control" name="user_type"  required />
                                    <option value="">select user type</option>
                                       <option value="Tutor">Tutor</option>
                                          <option value="Guardian">Guardian</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                 <button type="submit" class="btn btn-primary">
                                   <a href="{{route('login')}}" style="color: ghostwhite" > {{ __('Go to Login') }}</a>
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
