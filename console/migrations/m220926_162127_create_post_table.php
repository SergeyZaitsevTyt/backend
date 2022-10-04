<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m220926_162127_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'postId' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'title' => $this->string(),
            'body' => $this->text(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-post-user_id}}',
            '{{%post}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-post-user_id}}',
            '{{%post}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-post-user_id}}',
            '{{%post}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-post-user_id}}',
            '{{%post}}'
        );

        $this->dropTable('{{%post}}');
    }
}
