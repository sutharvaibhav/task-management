@extends('layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card o-hidden pt-2 small-widget">
                        <div class="card-body total-project border-b-primary border-2"><span
                                class="f-light f-w-500 f-14">Total Projects</span>
                            <div class="project-details mt-2">
                                <div class="project-counter">
                                    <h2 class="f-w-600">{{ $totalProjects }}</h2>
                                </div>
                                <div class="product-sub bg-primary-light">
                                    <svg class="invoice-icon">
                                        <use href="../assets/svg/icon-sprite.svg#color-swatch"></use>
                                    </svg>
                                </div>
                            </div>
                            <ul class="bubbles">
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card o-hidden pt-3 small-widget">
                        <div class="card-body total-Progress border-b-warning border-2"> <span
                                class="f-light f-w-500 f-14">Team Members</span>
                            <div class="project-details">
                                <div class="project-counter">
                                    <h2 class="f-w-600">{{ $totalMembers }}</h2>
                                </div>
                                <div class="product-sub bg-light-light">
                                    <svg class="invoice-icon">
                                        <use href="../assets/svg/icon-sprite.svg#edit-2"></use>
                                    </svg>
                                </div>
                            </div>
                            <ul class="bubbles">
                                <li class="bubble"></li>
                                <li class="bubble"> </li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card o-hidden pt-3 small-widget">
                        <div class="card-body total-Complete border-b-secondary border-2"><span
                                class="f-light f-w-500 f-14">Completed Tasks</span>
                            <div class="project-details">
                                <div class="project-counter">
                                    <h2 class="f-w-600">{{ $completedTasks }}</h2>
                                </div>
                                <div class="product-sub bg-secondary-light">
                                    <svg class="invoice-icon">
                                        <use href="../assets/svg/icon-sprite.svg#add-square"></use>
                                    </svg>
                                </div>
                            </div>
                            <ul class="bubbles">
                                <li class="bubble"> </li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"> </li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card o-hidden pt-3 small-widget">
                        <div class="card-body total-upcoming border-2"><span class="f-light f-w-500 f-14">Pending
                                Tasks</span>
                            <div class="project-details">
                                <div class="project-counter">
                                    <h2 class="f-w-600">{{ $pendingTasks }}</h2>
                                </div>
                                <div class="product-sub bg-warning-light">
                                    <svg class="invoice-icon">
                                        <use href="../assets/svg/icon-sprite.svg#tick-circle"></use>
                                    </svg>
                                </div>
                            </div>
                            <ul class="bubbles">
                                <li class="bubble"> </li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                                <li class="bubble"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
