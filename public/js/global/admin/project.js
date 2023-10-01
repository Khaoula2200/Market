
$('.new-entity').off('click').on('click', function() {
    console.log('add');
    // var url = Routing.generate('app_compagnies_save');
    var url = '/project/create';
    $.get({
        url,
        success: (data) => updateModal('Ajouter une compagnie', data),
        error: onErrorLoad
    });
});
$('.edit-item-btn').off('click').on('click', function() {
    console.log('edit');
    var id = $(this).attr('element-id');
    var url = '/project/create/' + id;
    console.log(url)
    $.get({
        url,
        success: (data) => updateModal('Modifier une compagnie', data),
        error: onErrorLoad
    });
});
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
function updateModal(title, body) {
    console.log(body)
    console.log($(".modal-body"))
    $('.modal-loading-spinner').hide();
    $('.modal-content-title').html(title);
    $(".modal-body").html(body);
    // $('#my_form').on('submit', function(event) {
    //     console.log('clicked')
    //     event.preventDefault(); // Prevent the default form submission behavior
    //     // Rest of your code for handling the form submission via AJAX
    // });
}

