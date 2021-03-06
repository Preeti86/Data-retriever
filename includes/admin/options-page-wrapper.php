<div class="wrap">

    <div id="icon-options-general" class="icon32"></div>
    <h1>Ckan open data</h1>

    <div id="poststuff">

        <div id="post-body" class="metabox-holder columns-2">

            <!-- main content -->
            <div id="post-body-content">

                <div class="meta-box-sortables ui-sortable">

                    <?php if (!isset($data_search) || $data_search == ''): ?>

                        <div class="postbox">

                            <div class="handlediv" title="Click to toggle"><br></div>
                            <!-- Toggle -->

                            <h2 class="handle"><span>Lets Get started</span>
                            </h2>

                            <div class="inside">
                                <form method="post" action="">

                                    <input type="hidden" name="data_form_submitted" value="Y">

                                    <table class="form-table">
                                        <tr valign="top">
                                            <td scope="row"><label for="tablecell">Search String</label></td>
                                            <td><input name="data_search" id="data_search" type="text" value=""
                                                       class="regular-text"/></td>
                                        </tr>
                                        <tr valign="top">
                                            <td scope="row"><label for="tablecell">API Key</label></td>
                                            <td><input name="data_apikey" id="data_apikey" type="text" value=""
                                                       class="regular-text"/></td>
                                        </tr>
                                    </table>
                                    <p>
                                        <input class="button-primary" type="submit" name="data_form_submit" value="Save"/>
                                    </p>
                                </form>
                            </div>
                            <!-- .inside -->
                        </div>
                    <?php else: ?>

                        <!-- .postbox -->
                        <div class="postbox">

                            <div class="handlediv" title="Click to toggle"><br></div>
                            <!-- Toggle -->

                            <h2 class="handle"><span>Lets Get started</span>
                            </h2>

                            <div class="inside">
                                <p>Below are the 10 articles</p>

                                <ul class="data-articles">

                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <li>
                                            <ul>
                                                <?php if (count($data_results->{'response'}->{'docs'}[$i]->{'multimedia'}) > 0): ?>
                                                    <li>
                                                        <img width="120px"
                                                             src="<?php echo 'http://www.nytimes.com/' . $data_results->{'response'}->{'docs'}[0]->{'multimedia'}[1]->{'url'} ?>"/>
                                                    </li>
                                                <?php endif; ?>

                                                <li class="data-articles-name">
                                                    <a href="<?php echo $data_results->{'response'}->{'docs'}[$i]->{'web_url'}; ?>">
                                                        <?php echo $data_results->{'response'}->{'docs'}[$i]->{'headline'}->{'main'}; ?>
                                                    </a>
                                                </li>

                                                <li class="data-articles-paragraph">
                                                    <p><?php echo $data_results->{'response'}->{'docs'}[$i]->{'lead_paragraph'}; ?></p>
                                                </li>

                                            </ul>
                                        </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- .postbox -->
                    <div class="postbox">

                        <div class="handlediv" title="Click to toggle"><br></div>
                        <!-- Toggle -->

                        <h2 class="handle"><span>JSON Feed</h2>

                        <div class="inside">
                            <p>
                                <?php echo $data_results->{'response'}->{'docs'}[0]->{'web_url'}; ?>
                            </p>
                            <p>
                                <?php echo $data_results->{'response'}->{'docs'}[0]->{'headline'}->{'main'}; ?>
                            </p>
                            <p>
                                <?php echo $data_results->{'response'}->{'docs'}[0]->{'multimedia'}[1]->{'url'}; ?>
                            </p>
                            <p>
                                <?php echo $data_results->{'response'}->{'docs'}[0]->{'lead_paragraph'}; ?>
                            </p>


                            <pre><code><?php var_dump($data_results); ?></code></pre>
                        </div>
                        <!-- .inside -->

                    </div>
                </div>
                <!-- .meta-box-sortables .ui-sortable -->

            </div>
            <!-- post-body-content -->

            <!-- .postbox --->
            <div id="postbox-container-1" class="postbox-container">

                <div class="meta-box-sortables">
                    <?php if (isset($data_search) && $data_search != '') ; ?>
                    <div class="postbox">
                        <div class="handlediv" title="Click to toggle"><br></div>

                        <h2 class="handle"><span>Settings</span></h2>

                        <div class="inside">


                            <form method="post" action="">
                                <input type="hidden" name="data_form_submitted" value="Y">
                                <p>
                                    <input name="data_search" type="text" id="data_search" value="<?php echo $data_search; ?>"
                                           class="all-options"/>

                                </p>
                                <p>
                                    <input name="data_apikey" type="text" id="data_apikey" value="<?php echo $data_apikey; ?>"
                                           class="all-options"/>

                                </p>

                                <input class="button-primary" type="submit" name="data_form_submit" value="update">
                            </form>
                        </div>
                    </div>
