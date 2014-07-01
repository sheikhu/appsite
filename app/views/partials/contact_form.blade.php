<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contact Me</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                {{ Form::open() }}
                <div class="row">
                    <div class="form-group col-xs-12 floating-label-form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 floating-label-form-group">
                        {{ Form::label('email', 'Email Address') }}
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 floating-label-form-group">
                        {{ Form::label('message', 'Message') }}
                        {{ Form::textarea('email', null, ['class' => 'form-control', 'placeholder' => 'Message', 'rows' => 5])}}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-xs-12">
                        {{ Form::submit('Send', ['class' => 'btn btn-lg btn-success'])}}
                    </div>
                </div>
                {{ Form::close()}}
            </div>
        </div>
    </div>
</section>
