<?php
    if (isset($tt) && is_array($tt) && count($tt) > 0) {
        extract($tt);
        $idupdate = $id;
        $imgpath = IMG_PATH_ADMIN.$img;
        if (is_file($imgpath)) {
            $img = $imgpath;
            $old_img = basename($imgpath);
        } else {
            $img = "";
        }
    }
    $html_tintuclist = showdmtt_admin($tintuclist, $idloai);
?>
<section class="content-main">
    <form action="index.php?pg=updateblog" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">Cập nhật tin tức</h2>
                    <div>
                        <input type="hidden" name="id" value="<?=$idupdate?>">
                        <input type="hidden" name="old_img" value="<?=$old_img?>">
                        <button type="submit" name="updateblog" class="btn btn-md rounded font-sm hover-up">Cập nhật
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Thông tin tin tức</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <label class="form-label">Tên tác giả</label>
                            <input type="text" name="author"
                                value="<?=(isset($author) && $author != "") ? $author : "";?>" placeholder="Type here"
                                class="form-control" id="author_name" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="publish_date">Ngày đăng</label>
                            <input type="date" name="date" value="<?= ($date != "") ? $date : "";?>"
                                class="form-control" id="publish_date" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="title">Tiêu đề</label>
                            <textarea name="title" id="title" cols="30" rows="10" class="form-control" required></textarea>
                            <script>
                                var title = "<?=($title != "") ? $title : "";?>"
                                document.getElementById('title').value = title;
                            </script>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="content">Nội dung</label>
                            <textarea name="content" id="content" cols="30" rows="10" class="form-control form-control1" style="font-size: 17px;" required></textarea>
                            <script>
                                var content = "<?=($content != "") ? $content : "";?>"
                                document.getElementById('content').value = content;
                            </script>
                        </div>
                    </div>
                </div>
                <!-- card end// -->
                <!-- card end// -->
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Hình ảnh</h4>
                    </div>
                    <div class="card-body">
                        <div class="input-upload">
                            <img src="../uploads/<?=$img?>" alt="">
                            <input class="form-control" type="file" name="img">
                        </div>
                    </div>
                </div>
                <!-- card end// -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Danh Mục</h4>
                    </div>
                    <div class="card-body">
                        <div class="row gx-2">
                            <div class="col-sm-12 mb-3">
                                <label class="form-label">Danh Mục</label>
                                <select class="form-select" name="idloai">
                                    <option value=""></option>
                                    <?=$html_tintuclist;?>
                                </select>
                            </div>
                        </div>
                        <!-- row.// -->
                    </div>
                </div>
                <!-- card end// -->
            </div>
        </div>
    </form>
</section>
