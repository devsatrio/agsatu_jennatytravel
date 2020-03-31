<link rel="stylesheet" type="text/css"
    href="<?= base_url("tpl_admin")?>/assets/bootstrap-datepicker/css/datepicker.css" />
<script src="<?= base_url("tpl_admin")?>/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="<?= base_url("tpl_admin")?>/tinymce/tinymce.dev.js"></script>
<script>
tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
    ],
    external_plugins: {
        //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "save newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | inserttime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage",
    menubar: false,
    toolbar_items_size: 'small',

    style_formats: [{
            title: 'Bold text',
            inline: 'b'
        },
        {
            title: 'Red text',
            inline: 'span',
            styles: {
                color: '#ff0000'
            }
        },
        {
            title: 'Red header',
            block: 'h1',
            styles: {
                color: '#ff0000'
            }
        },
        {
            title: 'Example 1',
            inline: 'span',
            classes: 'example1'
        },
        {
            title: 'Example 2',
            inline: 'span',
            classes: 'example2'
        },
        {
            title: 'Table styles'
        },
        {
            title: 'Table row 1',
            selector: 'tr',
            classes: 'tablerow1'
        }
    ],

    templates: [{
            title: 'My template 1',
            description: 'Some fancy template 1',
            content: 'My html'
        },
        {
            title: 'My template 2',
            description: 'Some fancy template 2',
            url: 'development.html'
        }
    ]
});
</script>
<script type="text/javascript" src="<?= base_url("tpl_admin")?>/assets/bootstrap-datepicker/js/bootstrap-datepicker.js">
</script>
<script src="<?= base_url("tpl_admin")?>/js/advanced-form-components.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('button.tambah').click(function() {
        $('.form-tambah').fadeToggle();
    });
});

function hapus(x) {
    var konfirm = confirm("Yakin Ingin Menghapus Ini ? ");
    if (konfirm) {
        var id = x.parent().parent().find('.id').html();
        $.post('<?= base_url("admin/jamak/hapus")?>/' + id)
        x.parent().parent().remove();
    }
    return false;
}
</script>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                Edit Halaman
            </header>
            <div class="panel-body">
                <button class="btn-primary btn tambah"><i class="icon-plus"></i> Tambah Data</button>
                <div class="form-tambah" style="display:none; margin-top:10px;">
                    <form method="post" action="<?= base_url("admin/jamak/do_tambah")?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="judul" />
                                <input type="hidden" name="id_halaman" value="<?= $this->uri->segment(4);?>" />
                            </div>
                            <div class=" col-lg-6">
                                <label>Tanggal</label>
                                <input type="text" class="form-control default-date-picker" name="tanggal" />
                            </div>
                        </div>
						<br>
                        <div class="row">
                            <div class=" col-lg-12">
                                <label>Gambar</label>
                                <input type="file" class="form-control" name="gambar" />
                            </div>
                        </div>
						<br>
                        <div class="form-group">
                            <label>Isi</label>
                            <textarea class="form-control ckeditor" name="isi" rows="15"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"> Tambah</button> <a
                                href="<?= base_url("admin/halaman")?>" class="btn btn-warning">Batal</a>
                        </div>
                    </form>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
								$no=1;
								foreach($jamak as $jamak){?>
                        <tr>
                            <td class="hidden"><span class="id"><?= $jamak->id_majemuk?></span></td>
                            <td><?= $no;?></td>
                            <td><?= $jamak->judul?></td>
                            <td><?= substr($jamak->isi,0,100)?></td>
                            <td>
                                <a href="<?= base_url("admin/jamak/edit/".$jamak->id_majemuk."/".$id_jamak)?>"
                                    class="btn btn-xs btn-warning">Edit</a>
                                <a href="<?= base_url("admin/jamak/hapus/".$jamak->id_majemuk)?>"
                                    onclick="return hapus($(this));" class="btn btn-xs btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php $no++;}?>
                    </tbody>
                </table>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>