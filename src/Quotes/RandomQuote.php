<?php

trait RandomQuote
{
    public function getRandomQuote()
    {
        $quotes = [
            'Words are but pictures of our thoughts. (John Dryden)',
            'In three words I can sum up everything I\'ve learned about life: it goes on. (Robert Frost)',
            'Don\'t cry because it\'s over, smile because it happened. (Dr. Seuss)',
            'Be yourself; everyone else is already taken. (Oscar Wilde)',
            'So many books, so little time. (Frank Zappa)',
            'A room without books is like a body without a soul. (Marcus Tullius Cicero)',
            'You only live once, but if you do it right, once is enough. (Mae West)',
            'Be the change that you wish to see in the world. (Mahatma Gandhi)',
            'If you tell the truth, you don\'t have to remember anything. (Mark Twain)',
            'Always forgive your enemies; nothing annoys them so much. (Oscar Wilde)'
        ];
        
        return $quotes[rand(0, count($quotes) - 1)];
    }
}