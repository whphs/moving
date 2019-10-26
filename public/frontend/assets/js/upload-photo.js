let photoMultiThumb = {
    init: function() {
        let count = 0;
        let root = $('.photo-multi-thumb').addClass('d-inline-flex');
        let addThumb = $(
            '<div class="photo-multi-thumb">' +
            '<input class="thumb-file-input" type="file" style="display: none" />' +
            '<img class="thumb-image" src="../../backend/assets/img/camera.png"/>' +
            '</div>'
        );
         root.append(addThumb);

        let defaultSrc = addThumb.find('.thumb-image').attr('src');

        addThumb.on('click', '.thumb-image', function () {

            if(count < 3 ){
                $(this).parent().find('.thumb-file-input').click();
            }
            count++;
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
