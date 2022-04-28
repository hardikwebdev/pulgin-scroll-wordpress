<div class="wrap">
    <div class="metabox-holder">
        <div class="postbox">
            <h3><span><?php _e( 'Export Settings' ); ?></span></h3>
            <div class="inside">
                <p><?php _e( 'Export the plugin settings for this site as a .json file. This allows you to easily import the configuration into another site.' ); ?></p>
                <form method="post">
                    <p><input type="hidden" name="plug_sttaction" value="export_settings" /></p>
                    <p>
                        <?php wp_nonce_field( 'plug_sttexport_nonce', 'plug_sttexport_nonce' ); ?>
                        <span class="plug_sttsubmit_btn">
                            <?php submit_button( __( 'Export' ), 'secondary', 'submit', false ); ?>
                        </span>
                    </p>
                </form>
            </div><!-- .inside -->
        </div><!-- .postbox -->

        <div class="postbox">
        <h3><span><?php _e( 'Import Settings' ); ?></span></h3>
        <div class="inside">
            <p><?php _e( 'Import the plugin settings from a .json file. This file can be obtained by exporting the settings on another site using the form above.' ); ?></p>
            <form method="post" enctype="multipart/form-data">
                <p>
                    <input type="file" name="import_file"/>
                </p>
                <p>
                    <input type="hidden" name="plug_sttaction" value="import_settings" />
                    <?php wp_nonce_field( 'plug_sttimport_nonce', 'plug_sttimport_nonce' ); ?>
                    <span class="plug_sttsubmit_btn">
                        <?php submit_button( __( 'Import' ), 'secondary', 'submit', false ); ?>
                    </span>
                </p>
            </form>
        </div><!-- .inside -->
    </div><!-- .postbox -->
</div>