<main id = "safeMove">
    <!-- Move type start -->
    <section class="featured-properties-area section-padding-10-50">
        <div class="container">
            <div class="row">
                @foreach($scales as $indexKey => $scale)
                    <!-- Getting vehicles info -->
                    <div class="col-12 col-lg-6" style="margin-bottom: -30px">
                        <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">
                            <div class="property-content">
                                <div class="row">
                                    <div class="col-8 more-btn">
                                        <p class="vehicle-name">{{ $scale->name }}</p>
                                        <span>{{ __('string.format_price') }}{{ $scale->init_price }}</span>
                                        <p class="vehicle-description">{{ $scale->vehicle_description }}</p>
                                        <p class="vehicle-description">{{ $scale->helper_description }}</p>
                                        <!-- safe to move modal details button -->
                                        <button class="btn btn-link btn-sm" style="bottom: 1px;" onclick="safeMoveMore({{ $scale->id }});">{{ __('string.more_button') }}</button>
                                    </div>
                                    <div class="col-4" style="padding: unset; margin-left: auto; margin-right: auto;">
                                        {!! Html::image('storage/'.$scale->vehicle_photo, null, ['style'=>'width:90px; height:80px;']) !!}
                                        <button type="button" class="btn south-btn" onclick="safeMoveDetail({{ $scale->id }});">{{ __('string.detail_button') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

<script type="text/javascript">
    function safeMoveMore(scaleId) {
        window.location.href = "safe_move/more/" + scaleId;
    }

    function safeMoveDetail(scaleId) {
        window.location.href = "safe_move/detail/" + scaleId;
    }
</script>
