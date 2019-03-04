@extends('layouts.mainlayout')

@section('title', "Whittington's Wheels - About Us")

@section('content')

    <div class="card mb-3">
        <div class="card-body bg-secondary text-white">
            <h5 class="card-title">About Us</h5>
            <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar bibendum aliquet. Etiam luctus
                ullamcorper magna, sed blandit risus. Phasellus tincidunt neque vel pulvinar facilisis. Mauris eu ipsum
                lacus. Sed tempor ipsum non tincidunt facilisis. Vestibulum semper, ex in lacinia vestibulum, libero augue
                tristique urna, eu porttitor ante magna eget libero. Aenean nec magna aliquet, gravida elit non, aliquam
                metus.
            </p>
        </div>
    </div>

    <div class="row align-items-center mb-3">
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="/images/OwnerOne.jpg" alt="Owner One Picture">
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body bg-secondary text-white">
                    <h5 class="card-title">Owner</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar bibendum aliquet. Etiam luctus
                        ullamcorper magna, sed blandit risus. Phasellus tincidunt neque vel pulvinar facilisis. Mauris eu ipsum
                        lacus. Sed tempor ipsum non tincidunt facilisis. Vestibulum semper, ex in lacinia vestibulum, libero augue
                        tristique urna, eu porttitor ante magna eget libero. Aenean nec magna aliquet, gravida elit non, aliquam
                        metus.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
