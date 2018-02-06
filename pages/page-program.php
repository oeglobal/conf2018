<?php
/*
	Template name: Schedule - At a glance
*/
?>
<?php get_header(); ?>

<style>
    td {
        vertical-align: top;
        width: 14.28%;
    }

    table {
        background-color: white;
    }

    td.white {
        background-color: white;
        border-color: white;
    }

    td.grey   { background-color: rgb(191, 191, 191); }
    td.violet { background-color: rgb(180, 167, 212); }
    td.purple { background-color: rgb(193, 124, 159); }
    td.yellow { background-color: rgb(254, 242, 206); }
    td.green  { background-color: rgb(197, 224, 182); }
    td.blue   { background-color: rgb(156, 194, 227);
                display: table-cell;
                width: inherit;
                height: inherit;
    }
    td.peach  { background-color: rgb(247, 202, 174); }
    td.cream  { background-color: rgb(251, 228, 214); }

    .off-canvas-content {
        overflow-x: scroll !important;
    }
</style>

<div class="container">
    <div class="row">
        <div class="column">
            <h1 class="page--title">Program At-a-Glance</h1>

            <table class="table text-center">
                <thead>
                <tr>
                    <th class="text-center">Sat 21/4</th>
                    <th class="text-center">Sun 22/4</th>
                    <th class="text-center">Mon 23/4</th>
                    <th class="text-center">Tue 24/4</th>
                    <th class="text-center">Wed 25/4</th>
                    <th class="text-center">Thu 26/4</th>
                    <th class="text-center">Kingsday <br />Fri 27/4</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="grey">8:00 - 9:00<br/>
                        Registration Desk Open
                    </td>
                    <td class="grey">8:00 - 9:00<br/>
                        Registration Desk Open
                    </td>
                    <td class="grey">8:00 - 9:00<br/>
                        Registration Desk Open
                    </td>
                    <td rowspan="14" style="background-color: #f67f12;"></td>
                </tr>
                <tr>
                    <td rowspan="8" class="grey">9:00 - 17:00<br/>
                        <b>Go-Gn meeting</b></td>
                    <td rowspan="8" class="grey">9:00 - 17:00<br/>
                        <b>Go-Gn meeting</b></td>
                    <td rowspan="3" class="white"></td>
                    <td class="yellow">9:00 - 10:15<br/>
                        <b>Welcome<br/>
                            Opening Minister of Education<br/>
                            Keynote Vincent Zimmer</b></td>
                    <td class="yellow">
                        9:00 - 10:00<br/>
                        <br/>
                        <b>Keynote Erin McKiernan<br/>
                            UNESCO OER Policy Update</b></td>

                    <td class="yellow">9:00 - 10:00<br/>
                        <br/>
                        <b>Keynote<br/>
                            Annemies Broekgaarden</b></td>
                </tr>
                <tr>
                    <td class="green">10:15 - 10:45<br/>
                        Coffee/Tea Break
                    </td>
                    <td class="green">10:15 - 10:45<br/>
                        Coffee/Tea Break
                    </td>
                    <td class="green">10:00 - 10:30<br/>
                        Coffee/Tea Break
                    </td>
                </tr>
                <tr>
                    <td class="blue">10:45 - 12:30<br/>
                        <b>parallel sessions A1 (4)</b>
                    </td>
                    <td class="blue">10:30 - 12:35<br/>
                        <b>parallel sessions B1 (5)</b>
                    </td>
                    <td class="blue">10:30 - 12:10<br/>
                        <b>parallel sessions C1 (4)</b>
                    </td>
                </tr>
                <tr>
                    <td class="violet">
                        12.30 - 17.00
                        Registration Desk Open<br/>
                    </td>
                    <td class="green">12:30 -13:30<br/>
                        Lunch
                    </td>
                    <td class="green">12:35 -13:35<br/>
                        Lunch<br/>
                        <b>poster session</b></td>
                    <td class="green">12:10 -13:15<br/>
                        Lunch
                    </td>
                </tr>
                <tr>
                    <td rowspan="4" class="purple"><b>14.00 - 17.00<br />
                            <b></b>Pre-Conference<br/>
                            TU Delft Open & Online<br/>
                            Education</b>
                    </td>
                    <td class="yellow">13:30 - 14:15<br/>
                        <b>OE Consortium Update by new Executive Director</b></td>
                    <td class="yellow">13:35 - 14:20<br />
                        <b>Featured Speaker 1</b></td>
                    <td class="blue">13:15 - 14:30<br/>
                        <b>parallel sessions C2 (3)</b></td>
                </tr>
                <tr>
                    <td class="blue">
                        14:25 - 15:40<br/>
                        <b>parallel sessions A2 (3)</b>
                    </td>
                    <td class="blue">
                        14:45 - 16:00<br />
                        <b>parallel sessions B2 (3)</b>
                    </td>
                    <td class="yellow">
                        14:45 - 15:30<br />
                        <b>Closing Keynote Peter Smith</b>
                    </td>

                </tr>
                <tr>
                    <td class="green">15:40 - 16:10<br/>
                        Coffee/Tea Break
                    </td>
                    <td class="green">
                        15:45 - 16:15<br/>
                        Coffee/Tea Break
                    </td>
                    <td class="green">15:30  - 16:00<br/>
                        Coffee/Tea Break
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" class="blue">
                    16:10 - 17:30<br/>
                        <b>parallel sessions A3 (3)</b>
                    </td>
                    <td rowspan="2" class="blue">
                        16:15 - 17:30<br />
                        <b>parallel sessions B3 (3)</b>
                    </td>
                    <td rowspan="6" class="cream"><b>Optional Madurodam Tour</b></td>
                </tr>

                <tr>
                    <td rowspan="5" class="white"></td>
                    <td rowspan="5" class="white"></td>
                    <td rowspan="5" class="white"></td>
                </tr>
                <tr>
                    <td class="white"><br /></td>
                    <td class="white"><br /></td>
                </tr>

                <tr>
                    <td rowspan="2" class="peach">18:30 - 20:30<br/>
                        <b>Opening Reception &amp; Awards Ceremony</b>
                    </td>
                    <td class="white"><br/></td>
                </tr>
                <tr>
                    <td rowspan="2" class="peach">19:00 - 23:00<br/>
                        <b>Gala Dinner</b>
                    </td>
                </tr>
                <tr>
                    <td class="white"><br /></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php get_footer(); ?>
