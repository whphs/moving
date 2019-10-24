let photoSingleThumb = {
    init: function() {
        let root = $('.photo-single-thumb');
        root.append(
            '<input class="thumb-file-input" type="file" style="display: none" />' +
            '<img class="thumb-image" src="../../backend/assets/img/camera.png"/>'
        );

        let defaultSrc = root.find('.thumb-image').attr('src');
        root.on('click', '.thumb-image', function () {
            $(this).parent().find('.thumb-file-input').click();
        });

        $('.thumb-file-input').on('change', function() {
            let img = $(this).parent().find('.thumb-image');
            if (this.files && this.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    img.attr('src', e.target.result);
                };

                reader.readAsDataURL(this.files[0]);
            } else {
                img.attr('src', defaultSrc);
            }
        });
    }
};

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
            $(this).parent().find('.thumb-file-input').click();
        });

        $('.thumb-file-input').on('change', function() {
            if (this.files && this.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    let viewThumb = $('<div class="photo-view-thumb mr-2"></div>');
                    let img = $('<img class="thumb-image" onclick="window.open(this.src)" />');
                    img.attr('src', e.target.result);
                    let btnRemove = $('<a class="thumb-remove"><i class="fa fa-times-circle"></i></a>');
                    viewThumb.append(img);
                    viewThumb.append(btnRemove);
                    root.prepend(viewThumb);
                };

                reader.readAsDataURL(this.files[0]);
            }
        });
    }
};
