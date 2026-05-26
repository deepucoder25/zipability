<?php
$blogs = loadData('blogs.json');

if (!function_exists('slugify')) {
    function slugify($text) {
        $text = strtolower($text);
        $text = preg_replace('~[^a-z0-9\s-]~', '', $text);
        $text = preg_replace('~[\s-]+~', '-', $text);
        return trim($text, '-');
    }
}

// Handle Add Blog
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_blog'])) {
    $slug = slugify($_POST['slug'] ?: $_POST['title']);
    $image = '';
    if (!empty($_FILES['image']['name'])) {
        $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        $image = $slug . "." . $ext;
        
        if (file_exists(UPLOAD_PATH . $image)) {
            $image = $slug . "-" . time() . "." . $ext;
        }
        
        move_uploaded_file($_FILES["image"]["tmp_name"], UPLOAD_PATH . $image);
    }

    $new_blog = [
        "id" => time(),
        "title" => $_POST['title'],
        "slug" => $slug,
        "description" => $_POST['description'],
        "content" => $_POST['content'],
        "image" => $image,
        "created_at" => date('Y-m-d H:i:s')
    ];
    
    $blogs[] = $new_blog;
    saveData('blogs.json', $blogs);
    header('Location: admin.php?action=blogs');
    exit;
}

// Handle Update Blog
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_blog'])) {
    $id = $_POST['blog_id'];
    $new_slug = slugify($_POST['slug'] ?: $_POST['title']);
    
    foreach($blogs as &$blog) {
        if ($blog['id'] == $id) {
            $old_image = $blog['image'];
            $blog['title'] = $_POST['title'];
            $blog['slug'] = $new_slug;
            $blog['description'] = $_POST['description'];
            $blog['content'] = $_POST['content'];
            
            if (!empty($_FILES['image']['name'])) {
                if ($old_image && file_exists(UPLOAD_PATH . $old_image)) {
                    unlink(UPLOAD_PATH . $old_image);
                }
                
                $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
                $new_image_name = $new_slug . "." . $ext;
                
                if (file_exists(UPLOAD_PATH . $new_image_name)) {
                    $new_image_name = $new_slug . "-" . time() . "." . $ext;
                }
                
                if (move_uploaded_file($_FILES["image"]["tmp_name"], UPLOAD_PATH . $new_image_name)) {
                    $blog['image'] = $new_image_name;
                }
            } 
            else if ($old_image) {
                $old_ext = pathinfo($old_image, PATHINFO_EXTENSION);
                $expected_name = $new_slug . "." . $old_ext;
                
                if ($old_image !== $expected_name && file_exists(UPLOAD_PATH . $old_image)) {
                    if (rename(UPLOAD_PATH . $old_image, UPLOAD_PATH . $expected_name)) {
                        $blog['image'] = $expected_name;
                    }
                }
            }
            break;
        }
    }
    saveData('blogs.json', $blogs);
    header('Location: admin.php?action=blogs');
    exit;
}

// Handle Delete Blog
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    foreach($blogs as $key => $blog) {
        if ($blog['id'] == $id) {
            if ($blog['image'] && file_exists(UPLOAD_PATH . $blog['image'])) {
                unlink(UPLOAD_PATH . $blog['image']);
            }
            unset($blogs[$key]);
            break;
        }
    }
    saveData('blogs.json', array_values($blogs));
    header('Location: admin.php?action=blogs');
    exit;
}

include 'header.php';
?>

<style>
    .form-label { font-weight: 600; color: #475569; font-size: 0.85rem; margin-bottom: 0.4rem; }
    .form-control { border-radius: 8px; border: 1px solid #e2e8f0; padding: 0.6rem 0.8rem; font-size: 0.9rem; }
    .form-control:focus { border-color: var(--primary); box-shadow: 0 0 0 3px rgba(255, 102, 0, 0.1); }
    .modal-content { border-radius: 15px; border: none; }
    .modal-header { border-bottom: 1px solid #f1f5f9; padding: 1.2rem 1.5rem; }
    .modal-footer { border-top: 1px solid #f1f5f9; padding: 1rem 1.5rem; }
    .modal-title { font-weight: 700; color: var(--navy); }
    .btn-admin { padding: 0.6rem 1.5rem; border-radius: 8px; font-weight: 600; }
</style>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Blog Management</h2>
    <button class="btn btn-admin" data-bs-toggle="modal" data-bs-target="#addBlogModal"><i class="bi bi-plus-lg me-2"></i> Add New Blog</button>
</div>

<div class="row g-4">
    <?php if (empty($blogs)): ?>
        <div class="col-12 text-center p-5">
            <div class="bg-light rounded-4 p-5">
                <i class="bi bi-journal-text display-1 text-muted mb-3 d-block"></i>
                <p class="text-muted fs-5">No blogs found. Start by adding one!</p>
            </div>
        </div>
    <?php else: ?>
        <?php foreach (array_reverse($blogs) as $blog): ?>
            <div class="col-md-4">
                <div class="card h-100 overflow-hidden shadow-sm border-0 rounded-4">
                    <?php if ($blog['image'] && file_exists(UPLOAD_PATH . $blog['image'])): ?>
                        <img src="<?= UPLOAD_URL . $blog['image'] ?>" class="card-img-top" style="height: 180px; object-fit: cover;">
                    <?php else: ?>
                        <div class="bg-light d-grid place-items-center text-center" style="height: 180px;">
                            <i class="bi bi-image text-secondary display-6"></i>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="fw-bold mb-1 fs-6"><?= $blog['title'] ?></h5>
                        <div class="mb-2">
                            <span class="badge bg-light text-primary border-0 rounded-pill px-2 py-1" style="font-size: 0.7rem;"><i class="bi bi-link-45deg"></i> <?= $blog['slug'] ?? slugify($blog['title']) ?></span>
                        </div>
                        <p class="text-muted small mb-0" style="line-height: 1.4;"><?= substr($blog['description'], 0, 80) ?>...</p>
                        
                        <div class="mt-3 pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="small text-secondary" style="font-size: 0.75rem;"><?= date('M d, Y', strtotime($blog['created_at'])) ?></span>
                            <div class="btn-group">
                                <?php 
                                    $link_slug = $blog['slug'] ?? slugify($blog['title']);
                                    $live_link = 'index.php/blog/' . $link_slug;
                                ?>
                                <a href="<?= $live_link ?>" target="_blank" class="btn btn-sm btn-light border" title="View Live"><i class="bi bi-box-arrow-up-right"></i></a>
                                <button class="btn btn-sm btn-light border mx-1" data-bs-toggle="modal" data-bs-target="#editBlog<?= $blog['id'] ?>"><i class="bi bi-pencil"></i></button>
                                <a href="admin.php?action=blogs&delete=<?= $blog['id'] ?>" class="btn btn-sm btn-outline-danger border" onclick="return confirm('Delete this blog?')"><i class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Blog Modal -->
                <div class="modal fade" id="editBlog<?= $blog['id'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-md modal-dialog-centered">
                        <div class="modal-content shadow-lg">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Blog Post</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <form method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="blog_id" value="<?= $blog['id'] ?>">
                                <div class="modal-body p-4">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Blog Title</label>
                                            <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($blog['title']) ?>" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">URL Slug</label>
                                            <input type="text" name="slug" class="form-control" value="<?= htmlspecialchars($blog['slug'] ?? slugify($blog['title'])) ?>">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Short Description</label>
                                            <textarea name="description" class="form-control" rows="2" required><?= htmlspecialchars($blog['description']) ?></textarea>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Blog Content</label>
                                            <textarea name="content" class="form-control" rows="5" required><?= htmlspecialchars($blog['content']) ?></textarea>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Featured Image</label>
                                            <div class="d-flex align-items-center gap-3">
                                                <input type="file" name="image" class="form-control flex-grow-1" accept="image/*">
                                                <?php if ($blog['image'] && file_exists(UPLOAD_PATH . $blog['image'])): ?>
                                                    <img src="<?= UPLOAD_URL . $blog['image'] ?>" class="rounded border" style="width: 50px; height: 50px; object-fit: cover;">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer bg-light">
                                    <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" name="update_blog" class="btn btn-admin">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<!-- Add Blog Modal -->
<div class="modal fade" id="addBlogModal" tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content shadow-lg">
            <div class="modal-header">
                <h5 class="modal-title">Create New Blog Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Blog Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">URL Slug</label>
                            <input type="text" name="slug" class="form-control" placeholder="custom-path">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Short Description</label>
                            <textarea name="description" class="form-control" rows="2" placeholder="Brief summary..." required></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Blog Content</label>
                            <textarea name="content" class="form-control" rows="5" placeholder="Write your post content here..." required></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Featured Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="add_blog" class="btn btn-admin">Publish Blog</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
