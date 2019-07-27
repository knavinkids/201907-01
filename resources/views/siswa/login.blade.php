@extends('layouts.app')

@section('content')

<div class="form-group">
   <div class="col-md-12">
       <center>
          <a href="{{ URL('social-media/register/facebook') }}" class="btn btn-info">
             Facebook
          </a>
          <a href="{{ URL('social-media/register/github') }}" class="btn btn-default">
             Github
          </a>
          <a href="{{ URL('social-media/register/google') }}" class="btn btn-danger">
             Google
          </a>
          <a href="{{ URL('social-media/register/bitbucket') }}" class="btn btn-primary">
             Bitbucket
          </a>
          <a href="{{ URL('social-media/register/linkedin') }}" class="btn btn-primary">
             LinkedIn
          </a>
        </center>
      </div>
</div>
