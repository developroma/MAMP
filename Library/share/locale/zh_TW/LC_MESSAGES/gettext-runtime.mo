Þ    .        =   ü      ð  8   ñ  B   *  A   m  6   ¯  H   æ  I   /  F   y  9   À  7   ú  6   2  M   i  L   ·  O     H   T  {          ,   5     b  .     '   ±  (   Ù     	     "	  e   /	  :   	    Ð	  Þ  ê
    É     \     q  1     &   ´     Û     ê  "   ÿ  9   "  I   \     ¦     D     T     m     ~               ²  Ö  ¾  8     :   Î  8   	  9   B  I   |  I   Æ  >     =   O  ;     /   É  P   ù  @   J  L     I   Ø  Y   "     |  %     "   À  9   ã  (     )   F  "   p       L      1   í  î         (  £     Ì     Ý     î  (        4     C  $   V  >   {  N   º     	          ®     Ì     Ü     é     ö                                   &   %                     .                 -       !                             *   
                "                ,   	   $          +   #   )                (       '                 -E                        (ignored for compatibility)
   -V, --version               output version information and exit
   -V, --version             display version information and exit
   -c, --context=CONTEXT     specify context for MSGID
   -d, --domain=TEXTDOMAIN   retrieve translated message from TEXTDOMAIN
   -d, --domain=TEXTDOMAIN   retrieve translated messages from TEXTDOMAIN
   -e                        enable expansion of some escape sequences
   -h, --help                  display this help and exit
   -h, --help                display this help and exit
   -n                        suppress trailing newline
   -v, --variables             output the variables occurring in SHELL-FORMAT
   COUNT                     choose singular/plural form based on this value
   MSGID MSGID-PLURAL        translate MSGID (singular) / MSGID-PLURAL (plural)
   [TEXTDOMAIN]              retrieve translated message from TEXTDOMAIN
   [TEXTDOMAIN] MSGID        retrieve translated message corresponding
                            to MSGID from TEXTDOMAIN
 %s: invalid option -- '%c'
 %s: option '%s%s' doesn't allow an argument
 %s: option '%s%s' is ambiguous
 %s: option '%s%s' is ambiguous; possibilities: %s: option '%s%s' requires an argument
 %s: option requires an argument -- '%c'
 %s: unrecognized option '%s%s'
 Bruno Haible Display native language translation of a textual message whose grammatical
form depends on a number.
 Display native language translation of a textual message.
 If the TEXTDOMAIN parameter is not given, the domain is determined from the
environment variable TEXTDOMAIN.  If the message catalog is not found in the
regular directory, another location can be specified with the environment
variable TEXTDOMAINDIR.
Standard search directory: %s
 If the TEXTDOMAIN parameter is not given, the domain is determined from the
environment variable TEXTDOMAIN.  If the message catalog is not found in the
regular directory, another location can be specified with the environment
variable TEXTDOMAINDIR.
When used with the -s option the program behaves like the 'echo' command.
But it does not simply copy its arguments to stdout.  Instead those messages
found in the selected catalog are translated.
Standard search directory: %s
 In normal operation mode, standard input is copied to standard output,
with references to environment variables of the form $VARIABLE or ${VARIABLE}
being replaced with the corresponding values.  If a SHELL-FORMAT is given,
only those environment variables that are referenced in SHELL-FORMAT are
substituted; otherwise all environment variables references occurring in
standard input are substituted.
 Informative output:
 Operation mode:
 Substitutes the values of environment variables.
 Try '%s --help' for more information.
 Ulrich Drepper Unknown system error Usage: %s [OPTION] [SHELL-FORMAT]
 Usage: %s [OPTION] [TEXTDOMAIN] MSGID MSGID-PLURAL COUNT
 Usage: %s [OPTION] [[TEXTDOMAIN] MSGID]
or:    %s [OPTION] -s [MSGID]...
 When --variables is used, standard input is ignored, and the output consists
of the environment variables that are referenced in SHELL-FORMAT, one per line.
 Written by %s.
 error while reading "%s" memory exhausted missing arguments standard input too many arguments write error Project-Id-Version: gettext-runtime 0.20-rc1
Report-Msgid-Bugs-To: bug-gettext@gnu.org
PO-Revision-Date: 2019-04-29 21:31+0800
Last-Translator: pan93412 <pan93412@gmail.com>
Language-Team: Chinese (traditional) <zh-l10n@linux.org.tw>
Language: zh_TW
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Bugs: Report translation errors to the Language-Team address.
Plural-Forms: nplurals=1; plural=0;
X-Generator: Lokalize 19.04.0
   -E                        ï¼å¿½ç¥ï¼åä½ç¸å®¹ï¼
   -V, --version               è¼¸åºçæ¬è³è¨ä¸¦çµæ
   -V, --version             é¡¯ç¤ºçæ¬è³è¨ä¸¦çµæ
   -c, --context=ä¸ä¸æ      æå® MSGID çä¸ä¸æ
   -d, --domain=æå­é å     å¾ <æå­é å> åå¾å·²ç¿»è­¯è¨æ¯
   -d, --domain=æå­é å     å¾ <æå­é å> åå¾å·²ç¿»è­¯è¨æ¯
   -e                        åç¨é¨ä»½è·³è«åºåçæ´å
   -h, --help                  é¡¯ç¤ºæ­¤èªªæè¨æ¯å¾çµæ
   -h, --help                é¡¯ç¤ºæ­¤èªªæè¨æ¯å¾çµæ
   -n                        é±èå°¾ç«¯æè¡
   -v, --variables             é¡¯ç¤º <SHELL-æ ¼å¼> ä¸­åºç¾éçç°å¢è®æ¸
   æ¸é                      åºæ¼æ­¤å¼é¸æå®è¤æ¸åæ
   MSGID MSGID-è¤æ¸          ç¿»è­¯ MSGID (å®æ¸) / MSGID-è¤æ¸ (è¤æ¸)
   [æå­é å]                å¾ <æå­é å> åå¾å·²ç¿»è­¯è¨æ¯
   [æå­é å] MSGID          å¾ <æå­é å> åå¾å°æ MSGID çå·²ç¿»è­¯è¨æ¯
 %sï¼é¸é ç¡æ --ã%cã
 %sï¼é¸é ã%s%sãä¸è½æåæ¸
 %sï¼é¸é ã%s%sãæ¨¡ç¨å©å¯
 %sï¼é¸é ã%s%sãæ¨¡ç¨å©å¯ï¼å¯è½é¸é åæ¬ï¼ %sï¼é¸é ã%s%sãéè¦ä¸ååæ¸
 %sï¼é¸é éè¦ä¸ååæ¸ --ã%cã
 %sï¼ç¡æ³è­å¥é¸é ã%s%sã
 Bruno Haible é¡¯ç¤ºææå­è¨æ¯çåçèªè¨ç¿»è­¯ï¼å¶ææ³åå®è¤æ¸å½±é¿ã
 é¡¯ç¤ºæåæå­è¨æ¯çåçèªè¨ç¿»è­¯ã
 è¥æªæå® <æå­é å> åæ¸ï¼å°æä¾ TEXTDOMAIN ç°å¢è®æ¸æ±ºå® <æå­é å> çå¼ã
å¦æè¨æ¯è³ææªæªå¨æ­£å¸¸ç®éä¸­æ¾å°ï¼åå¯ä½¿ç¨ TEXTDOMAINDIR ç°å¢è®æ¸æå®å¶ä»è·¯å¾ã
æ¨æºæå°è·¯å¾ï¼%s
 è¥æªæå® <æå­é å> åæ¸ï¼å°æä¾ TEXTDOMAIN ç°å¢è®æ¸æ±ºå® <æå­é å> çå¼ã
å¦ææªå¨æ­£å¸¸ç®éä¸­æ¾å°è¨æ¯è³ææªï¼åå¯éé TEXTDOMAINDIR ç°å¢è®æ¸æå®å¶ä»è·¯å¾ã
ä½¿ç¨ -s é¸é æï¼ç¨å¼å°å¦ãechoãæä»¤è¬éä½ï¼ä½ä¸å®å®åªæ¯æåæ¸è¤è£½å°æ¨æºè¼¸åºï¼
èæ¯è¼¸åºé¸åè³ææªä¸­çå·²ç¿»è­¯è¨æ¯ã
æ¨æºæå°è·¯å¾ï¼%s
 å¨æ­£å¸¸æ¨¡å¼ä¸ï¼æå¾æ¨æºè¼¸å¥è®åè³æï¼ä¸¦å°å§å®¹ä¸­çç°å¢è®æ¸ (å $VARIABLE æ
${VARIABLE}) è½æçºè©²è®æ¸çå¼ï¼ä¸¦å¨æ¨æºè¼¸åºé¡¯ç¤ºçµæãå¦ææå®äº SHELL-æ ¼å¼ï¼
ååªæ¿æ SHELL-æ ¼å¼ ä¸­æå®çè®æ¸ï¼å¦åææç°å¢è®æ¸é½ææ¿æã
 è³è¨è¼¸åºï¼
 æä½æ¨¡å¼ï¼
 æ¿æç°å¢è®æ¸çå¼ã
 è¼¸å¥ã%s --helpãåå¾æ´å¤è³è¨
 Ulrich Drepper æªç¥ç³»çµ±é¯èª¤ ç¨æ³ï¼%s [é¸é ] [SHELL-æ ¼å¼]
 ç¨æ³ï¼%s [é¸é ] [æå­é å] MSGID MSGID-è¤æ¸ æ¸é
 ç¨æ³ï¼%s [é¸é ] [[æå­é å] MSGID]
æï¼  %s [é¸é ] -s [MSGID]...
 å¦æä½¿ç¨ --variables é¸é ï¼å°æå¿½ç¥æ¨æºè¼¸å¥ï¼åªæè®å SHELL-æ ¼å¼ ä¸­ç
ç°å¢è®æ¸ä¸¦é¡¯ç¤ºè®æ¸åç¨±ï¼æ¯åä¸è¡ã
 ç± %s ç·¨å¯«ã
 è®åã%sãæç¼çé¯èª¤ è¨æ¶é«èç¡ ç¼ºå°åæ¸ æ¨æºè¼¸å¥ åæ¸éå¤ å¯«å¥æç¼çé¯èª¤ 