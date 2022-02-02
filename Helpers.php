/**
*
* Url helper: OOP and procedure style
*
*/

//OOP style


class SlugHelper
{
    static function translit(string $url): string{

        $transliterate = [
            "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "e", "ж" => "j", "з" => "z", "и" => "i",
            "й" => "y", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t",
            "у" => "u", "ф" => "f", "х" => "h", "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sch", "ъ" => "", "ы" => "y", "ь" => "",
            "э" => "e", "ю" => "yu", "я" => "ya", "А" => "A", "Б" => "B", "В" => "V", "Г" => "G", "Д" => "D", "Е" => "E", "Ё" => "E", "Ж" => "J",
            "З" => "Z", "И" => "I", "Й" => "Y", "К" => "K", "Л" => "L", "М" => "M", "Н" => "N", "О" => "O", "П" => "P", "Р" => "R", "С" => "S",
            "Т" => "T", "У" => "U", "Ф" => "F", "Х" => "H", "Ц" => "TS", "Ч" => "CH", "Ш" => "SH", "Щ" => "SCH", "Ъ" => "", "Ы" => "Y", "Ь" => "",
            "Э" => "E", "Ю" => "YU", "Я" => "YA",
            " " => "-",
            "." => "-",
            "," => "-",
            "=" => "-equals-",
            "+" => "-plus-",
            ">" => "-bigger-than-",
            "<" => "-lesser-than-",
            "&" => "-and-",

        ];
        $translit = mb_strtolower(strtr($url, $transliterate));
        while((strlen($translit)>1) and (substr($translit,-1)=='-')){
            $translit = substr($translit, 0, -1);
        }
        
        $translit = preg_replace('/[\-]{2,}/', '-', $translit);
        
        return $translit;
    }
}

