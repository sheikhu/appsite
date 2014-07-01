<div class="portfolio-modal modal fade" id="work-{{$work->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>{{ $work->title }}</h2>
                            <hr class="star-primary">
                            <img src="{{ asset($work->image) }}" class="img-responsive img-centered" alt="">
                            <p>
                                {{ $work->description }}
                            </p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="#">
                                {{ $work->client }}</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">{{ $work->date_project }}</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">{{ $work->service }}</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
