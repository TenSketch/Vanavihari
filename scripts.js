$('#dateRange').daterangepicker({
    timePicker: false,
    locale: {
        format: 'DD/MM/YY'
    }
});
$('#confirmGuestsRooms').click(function() {
  var guests = $('#guests').val();
  var rooms = $('#rooms').val();
  $('#guestsGuests').val(guests);
  $('#guestsRooms').val(rooms);
  $('.guests-rooms-label').html(guests + ' guests, ' + rooms + ' rooms');
  $('#guestsRoomsDropdown').dropdown('toggle');
});

$('#confirmGuestsRooms').click(function () {
    var guests = $('#guests').val();
    var rooms = $('#rooms').val();
    $('#guestsGuests').val(guests);
    $('#guestsRooms').val(rooms);
    $('.guests-rooms-label').html(guests + ' guests, ' + rooms + ' rooms');
    $('#guestsRoomsDropdown').dropdown('toggle');
});
