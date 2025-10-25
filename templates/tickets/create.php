<?php
$content = ob_get_clean();
ob_start();
?>
<div class="ticket-form-page">
    <div class="page-header">
        <h2>Create New Ticket</h2>
        <a href="/" class="btn btn-secondary">Back to Tickets</a>
    </div>

    <form method="post" action="/tickets/create" class="ticket-form">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4" required></textarea>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="priority">Priority</label>
                <select id="priority" name="priority">
                    <option value="low">Low</option>
                    <option value="medium" selected>Medium</option>
                    <option value="high">High</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status">
                    <option value="open" selected>Open</option>
                    <option value="in-progress">In Progress</option>
                    <option value="resolved">Resolved</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Create Ticket</button>
    </form>
</div>
<?php
$content = ob_get_clean();
include __DIR__ . '/../base.php';
