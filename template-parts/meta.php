<?php
/*
 * Template Name: Meta
 *
 */

get_header();
?>

<div class="container">
      <div class="row">
        <div class="col-md-12">
<br><br><br><br>
          <p>No wallet connected. Connect wallet to show accounts and their ETH balances.</p>

          <div class="alert alert-danger" id="alert-error-https" style="display: none">
            You can run this example only over HTTPS connection.
          </div>

          <div id="prepare">
            <button class="btn btn-primary" id="btn-connect">
              Connect wallet
            </button>
          </div>

          <div id="connected" style="display: none">

            <button class="btn btn-primary" id="btn-disconnect">
              Disconnect wallet
            </button>

            <hr>

            <div id="network">
              <p>
                <strong>Connected blockchain:</strong> <span id="network-name"></span>
              </p>

              <p>
                <strong>Selected account:</strong> <span id="selected-account"></span>
              </p>

            </div>

            <hr>

            <h3>All account balances</h3>

            <table class="table table-listing">
              <thead>
                <th>Address</th>
                <th>ETH balance</th>
              </thead>

              <tbody id="accounts">
              </tbody>
            </table>

            <p>Please try to switch between different accounts in your wallet if your wallet supports this functonality.</p>

          </div>

          <br>

        </div>
      </div>
    </div>

    <!-- We use simple <template> templating for the example -->
    <div id="templates" style="display: none">
      <template id="template-balance">
        <tr>
          <th class="address"></th>
          <td class="balance"></td>
        </tr>
      </template>
    </div>
    <br><br><br><br><br><br><br><br>
    <?php

get_footer();