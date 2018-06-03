<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            Home
        </li>
    </ol>
</nav>

<?php if (isset($_SESSION['success'])){ ?>
    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
<?php
}?>


<link rel="stylesheet" href="<?php echo base_url() ?>assets/calendar/fullcalendar.min.css" />
<script src="<?php echo base_url() ?>assets/calendar/lib/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/calendar/fullcalendar.min.js"></script>
<script src="<?php echo base_url() ?>assets/calendar/gcal.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div id="calendar">

            </div>

            <script type="text/javascript">
                    $(document).ready(function() {
                        $('#calendar').fullCalendar({
                            header: {
                                left: 'prev,next today',
                                center: 'title',
                                right: 'agendaMonth,agendaWeek,agendaDay'
                            },
                            defaultView: 'agendaWeek',
                            height: 500,
                            minTime: "07:00:00",
                            maxTime: "19:00:00",                            
                            allDaySlot: false,
                            nowIndicator: true,
                            firstDay: 1,
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
        </div>
    </div>
</div>


