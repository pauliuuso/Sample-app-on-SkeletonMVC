<div class="row">
    <div class="col-xs-12">
        <form action="home/logout" method="post">
            <button type="submit" class="btn btn-info float-right margin-top-10">Logout</button>
        </form>
        
        <h1>Your notes:</h1>
            <table class="table">
                <thead>
                    <tr class="info">
                        <th class="col-xs-10 col-sm-8">Note</th>
                        <th class="col-sm-3 hidden-xs">Date</th>
                        <th class="col-xs-2 col-sm-1 text-center">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($a = 0; $a < count($data); $a++)
                        {
                            ?>
                            <tr class="success">
                                <td class="hidden"><p class="val"><?php echo $data[$a][0] ?></p></td>
                                <td class="col-xs-10 col-sm-8 note"><p><?php echo htmlspecialchars($data[$a][1]) ?></p></td>
                                <td class="col-sm-3 hidden-xs"><p class="text-grey"><?php echo $data[$a][2] ?></p></td>
                                <td class="col-xs-2 col-sm-1 text-right"><button id="edit-btn" class="btn btn-info">Edit</button></td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        <div class="row margin-bottom-50">
            <form role="form" action="/dashboard/addNote" method="post" class="col-xs-12 col-sm-6 col-lg-4">
                <h3>Add note:</h3>
                <label for="note">Enter new note:</label>
                <input id="note-input" type="text" placeholder="Your note" name="note" class="form-control">
                <input id="note-id" type="hidden" value="0" name="id"><br/>
                <button class="btn btn-info" type="submit">Submit</button>
                <button id="cancel-btn" class="btn btn-warning hidden">Cancel</button>
            </form>
        </div>
    </div>
</div>