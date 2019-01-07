<!-- Modal -->
<div class="modal fade" id="teuContainerDetails" tabindex="-1" role="dialog" aria-labelledby="teuContainerDetailsTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teuContainerDetailsTitle">
                    TEU details
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">TEU points</th>
                            <th scope="col"># of Containers</th>
                            <th scope="col">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(countDetails, containerName) in containerDetails">
                            <th scope="row" v-html="containerName"></th>
                            <td v-html="countDetails.teus"></td>
                            <td v-html="countDetails.containers"></td>
                            <td><strong v-html="countDetails.total"></strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                </button>
            </div>
        </div>
    </div>
</div>
