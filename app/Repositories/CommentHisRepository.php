<?php
namespace App\Repositories;

use App\Models\Comment_history;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
class CommentHisRepository extends BaseRepository
{
    /**
     * Get the model of User
     *
     * @return string
     */
    public function getModel()
    {
        return Comment_history::class;
    }
}
?>