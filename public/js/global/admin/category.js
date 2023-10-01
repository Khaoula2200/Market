let currentRequest = null;
console.log('ceteeer')
$(function() {
    $('.new-entity').off('click').on('click', function() {
        console.log('add');
        $('.modal-loading-spinner').show();
        signature = '';
        // const url = Routing.generate('category_create');
        const url = '/category/create';
        manageThreads(url, 'save');
    });

    $('.edit').off('click').on('click', function() {
        console.log('edit');
        $('.modal-loading-spinner').show();
        signature = $(this).data("entity-id");
        const url = Routing.generate('app_signatures_save', { signature });
        manageThreads(url, 'edit');
    });
});

const onSuccess = {
    save: (data) => updateModal('Ajouter une signature', data),
    edit: (data) => updateModal('Modifier une signature', data)
};

const onErrorLoad = () => {
    var body = '' +
        '<div class="container">'
        + '<div class="row"> '
        + '<div class="alert alert-danger">'
        + 'Oops, vous avez pas les permission d\'administrateur pour accéder àcette page prière de contacter la direction'
        + '</div>'
        + ' </div>'
        + '</div>'
    $('.modal-loading-spinner').hide();
    $('.modal-content-title').html('Access denied');
    $(".modal-upper-body").html(body);
};

function manageThreads(url, action) {
    if (currentRequest) {
        currentRequest.abort();
    }

    try {
        currentRequest = $.get({
            url,
            success: onSuccess[action],
            error: onErrorLoad
        });

        return currentRequest;
    } catch (error) {

        return currentRequest = null;
    }
}

function updateModal(title, body) {
    $('.modal-loading-spinner').hide();
    $('.modal-content-title').html(title);
    $(".modal-upper-body").html(body);
}