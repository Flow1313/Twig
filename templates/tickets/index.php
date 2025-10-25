<?php
$content = ob_get_clean();
ob_start();
?>
<div class="tickets-page">
    <div class="actions">
        <a href="/tickets/create" class="btn btn-primary">Create New Ticket</a>
    </div>

    <div class="tickets-grid">
        <h3>Tickets (<?= is_array($tickets) ? count($tickets) : 0 ?>)</h3>
        
        <?php if (empty($tickets)): ?>
            <div class="empty-state">
                <p>No tickets yet. <a href="/tickets/create">Create your first ticket</a></p>
            </div>
        <?php else: ?>
            <div class="tickets-list">
                <?php foreach ($tickets as $ticket): ?>
                    <div class="ticket-card priority-<?= $ticket['priority'] ?>">
                        <div class="ticket-header">
                            <h4><?= htmlspecialchars($ticket['title']) ?></h4>
                            <span class="status status-<?= $ticket['status'] ?>">
                                <?= $ticket['status'] ?>
                            </span>
                        </div>
                        
                        <p class="ticket-description"><?= htmlspecialchars($ticket['description']) ?></p>
                        
                        <div class="ticket-footer">
                            <span class="priority priority-<?= $ticket['priority'] ?>">
                                <?= $ticket['priority'] ?>
                            </span>
                            <span class="ticket-date"><?= $ticket['created_at'] ?></span>
                            <form method="post" action="/tickets/delete" onsubmit="return confirm('Are you sure?')" style="display: inline;">
                                <input type="hidden" name="id" value="<?= $ticket['id'] ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php
$content = ob_get_clean();
include __DIR__ . '/../base.php';
