<?php
    function validate_profile(array $users, int $user_id): array | bool {
        foreach ($users as $user) {
            foreach ($user as $field) {
                if (!validate_string_lenght(strval($field))) return false;
            }
            if (in_array($user_id, $user)) {
                return $user;
            }
        }
        return false;
    }

    function validate_post(array $post) : bool {
        if (!strtotime($post['time'])) return false;
        foreach ($post as $field) {
            if (!validate_post_text_lenght(strval($field))) return false;
        }
        return true;
    }
    
    function validate_string_lenght(string $data) : bool {
        return strlen($data) <= 256;
    }

    function validate_post_text_lenght(string $data) : bool {
        return strlen($data) <= 512;
    }
?>