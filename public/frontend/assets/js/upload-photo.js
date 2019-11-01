let photoMultiThumb = {
    init: function() {
        let root = $('.photo-multi-thumb').addClass('d-inline-flex');
        let addThumb = $(
            '<div class="photo-single-thumb">' +
            '<input class="thumb-file-input" type="file" style="display: none" />' +
            '<img class="thumb-image" src="../../backend/assets/img/camera.png"/>' +
            '</div>'
        );
        root.append(addThumb);

        let defaultSrc = addThumb.find('.thumb-image').attr('src');

        addThumb.on('click', '.thumb-image', function () {
            if (root.find('.thumb-image.added').length < 3 ) {
                $(this).parent().find('.thumb-file-input').click();
            }
        });

        $('.thumb-file-input').on('change', function() {
            if (this.files && this.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    let viewThumb = $('<div class="photo-view-thumb mr-2"></div>');
                    let img = $('<img class="thumb-image added"/>');
                    img.attr('src', e.target.result);
                    let btnRemove = $('<a class="thumb-remove"><i class="fa fa-times-circle"></i></a>');
                    viewThumb.append(img, btnRemove);
                    root.prepend(viewThumb);
                };

                reader.readAsDataURL(this.files[0]);
            }
        });
    },

    photoAdded: function (id, path) {
        let viewThumb = $('<div class="photo-view-thumb mr-2"></div>');
        viewThumb.data('temp_photo_id', id);
        let img = $('<img class="thumb-image added"/>');
        img.attr('src', "/storage/uploads/temp_photo/"+path);
        let btnRemove = $('<a class="thumb-remove"><i class="fa fa-times-circle"></i></a>');
        viewThumb.append(img, btnRemove);
        $('.photo-multi-thumb').prepend(viewThumb);

    }
};
