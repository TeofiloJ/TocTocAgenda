
<link rel="stylesheet" href="<?php echo base_url() ?>assets/calendar/fullcalendar.min.css" />
<script src="<?php echo base_url() ?>assets/calendar/lib/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/calendar/fullcalendar.min.js"></script>
<script src="<?php echo base_url() ?>assets/calendar/gcal.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>Calendar</h1>

            <div id="calendar">

            </div>

            <script type="text/javascript">
                    $(document).ready(function() {
                        $('#calendar').fullCalendar({
                            eventSources: [
                                {
                                    color: '#18b9e6',   
                                    textColor: '#000000',
                                    events: [
                                        {
                        title: 'Event 1',
                        start: '2018-06-01'
                    },
                    {
                        title: 'Event 2',
                        start: '2018-06-07'
                    }
                                    ]
                                }
                             ]
                        });
                    });
            </script>
             <h2>gfdgdf</h2>



             
        </div>
    </div>
</div>

