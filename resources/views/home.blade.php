@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    sdsdfsd
1.At least have developed 3 projects on Laravel Framework and running since 1 year.

2.Good understanding of Design Pattern

3.Should have knowledge in MYSQL with writing complex query, Stored Procedures.

4.Knowledge of software development life cycle including analysis, design, functionality, testing and support.

5.Should have sound knowledge of ORM.

6.Bachelors Degree in any field of IT with programming skill and relevant experience

7. Should have skills to work with Restful API
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
