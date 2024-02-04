<?php include('./header.php'); ?>
    <section class="banner d-grid align-items-center">
        <div class="banner-content">
            <h1 class="display-4 text-center text-white">Welcome to Vanavihari Resorts</h1>
            <h3 class="text-center text-white">A Community Based Eco-Tourism, Maredumilli</h3>
        </div>
    </section>
    <section class="intro py-5">
        <div class="container">
            <p class="text-center border border-1 mb-0">Vanavihari resort, nestled in Maredumilli, is a haven for
                eco-tourism enthusiasts. This
                community-centric guesthouse offers a peaceful escape surrounded by nature. Providing cozy cottages
                and rooms, it sits within easy reach of Maredumilli Waterfalls, ensuring guests enjoy a tranquil
                environment. Delight in breakfast and dinner offerings, along with a relaxing stay at this charming
                retreat.</p>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <h1>Resort Booking</h1>
            <form>
                <div class="mb-3">
                    <label for="resort" class="form-label">Select Resort:</label>
                    <select class="form-select" id="resort">
                        <option value="Vanavihari">Vanavihari</option>
                        <option value="Maredumilli">Maredumilli</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="dateRange" class="form-label">Check-in/Check-out:</label>
                    <input type="text" name="datetimes" class="form-control" placeholder="Select dates" />
                </div>
                <div class="mb-3">
                    <label for="guestsRooms" class="form-label">Guests and Rooms:</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="guestsRooms" aria-describedby="guestsRoomsDropdown" readonly>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" style="height: 100%;" id="guestsRoomsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Select
                            </button>
                            <div class="dropdown-menu" aria-labelledby="guestsRoomsDropdown">
                                <div class="dropdown-item">
                                    <input type="number" class="form-control" id="guests" placeholder="Guests">
                                </div>
                                <div class="dropdown-item">
                                    <input type="number" class="form-control" id="rooms" placeholder="Rooms">
                                </div>
                                <div class="dropdown-item">
                                    <button type="button" class="btn btn-secondary" id="confirmGuestsRooms">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </section>
    <section class="py-5">
        <h3 class="text-center">What Our Client Says</h3>
        <div class="container mt-5">
            <div class="row">
                <!-- Review 1 -->
                <div class="col-md-4">
                    <h3>Review 1</h3>

                    <p class="text-justify border p-3 rounded">
                        Vanavihari resort, nestled in Maredumilli, is a haven for eco-tourism enthusiasts. This
                        community-centric guesthouse offers a peaceful escape surrounded by nature. Providing cozy
                        cottages
                        and rooms, it sits within easy reach of Maredumilli Waterfalls, ensuring guests enjoy a tranquil
                        environment.
                    </p>
                    <p><strong>Rating:</strong> 4.5/5</p>
                </div>

                <!-- Review 2 -->
                <div class="col-md-4">
                    <h3>Review 2</h3>

                    <p class="text-justify border p-3 rounded">
                        Another positive review for Vanavihari resort. Guests appreciate the serene environment and the
                        proximity to nature spots. The cozy cottages and rooms provide a comfortable stay, and the
                        delicious
                        breakfast and dinner offerings add to the overall experience.
                    </p>
                    <p><strong>Rating:</strong> 4.2/5</p>
                </div>

                <!-- Review 3 -->
                <div class="col-md-4">
                    <h3>Review 3</h3>

                    <p class="text-justify border p-3 rounded">
                        Vanavihari resort is highly recommended by visitors seeking an eco-friendly and
                        community-centric
                        guesthouse. The tranquil environment and easy access to Maredumilli Waterfalls make it an ideal
                        retreat. Guests enjoy the delightful breakfast and dinner options during their relaxing stay.
                    </p>
                    <p><strong>Rating:</strong> 4.7/5</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3> Vanavihari</h3>
                    <img class="image-fluid mb-3 pt-1" style="width:100%;" src="./images/outer.jpg">
                    <p>
                        Vanavihari resort, nestled in Maredumilli, is a haven for eco-tourism enthusiasts. This
                        community-centric guesthouse offers a peaceful escape surrounded by nature. Providing cozy
                        cottages
                        and rooms, it sits within easy reach of Maredumilli Waterfalls, ensuring guests enjoy a tranquil
                        environment. Delight in breakfast and dinner offerings, along with a relaxing stay at this
                        charming
                        retreat.
                    </p>
                </div>
                <!-- Right Column - Displaying Map -->
                <div class="col-md-6 mt-5">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2096.9750517228763!2d81.70766415859167!3d17.600715928141202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a373b5d52758873%3A0x718f2b2059db5e0a!2sVanavihari%20Maredumilli!5e0!3m2!1sen!2sin!4v1706798767875!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include('./footer.php'); ?>
<script>
    $(function () {
        $('input[name="datetimes"]').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'M/DD hh:mm A'
            }
        });
    });
    // Handle guests and rooms selection
    $('#confirmGuestsRooms').click(function () {
        var guests = $('#guests').val();
        var rooms = $('#rooms').val();
        $('#guestsRooms').val(guests + ' guests, ' + rooms + ' rooms');
        $('#guestsRoomsDropdown').dropdown('toggle');
    });
</script>