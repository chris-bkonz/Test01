<?php declare(strict_types=1);

namespace AbcTest\Learn;
/* awdawdawd*/
class L01Function
{
    public function run()
    {

        /*function getClassNameWithNamespace($namespace, $className)
        {
            if(false) {
                return null;
            } else {
                return sprintf(
                    '%s---%s',
                    $namespace,
                    $className
                );
            }
        }*/
        /*function getClassNameWithNamespace($namespace, $className): ?string // ? fuer empty accepted
        {
            if(false) {
                return null;
            } else {
                return sprintf(
                    '%s---%s',
                    $namespace,
                    $className
                );
            }
        }*/

        /*
        function getClassNameWithNamespace(string $namespace, string $className): ?string // ? fuer empty accepted
        {
            if(false) {
                return null;
            } else {
                return sprintf(
                    '%s---%s',
                    $namespace,
                    $className
                );
            }
        }*/

        function getClassNameWithNamespace(string $namespace, string $className, string $delimitor = '-'): ?string // ? fuer empty accepted
        {
            if(false) {
                return null;
            } else {
                return sprintf(
                    '%s%s%s',
                    $namespace,
                    $delimitor,
                    $className
                );
            }
        }

        $namespace = 'NAMESPACE01';
        $className = 'CLASSNAME01';

        $fullClassnameWithNamespace = getClassNameWithNamespace ($namespace, $className);
        echo $fullClassnameWithNamespace;

        /**
         * .......
         */

        $namespace = 'NAMESPACE02';
        $className = 'CLASSNAME02';

        $fullClassnameWithNamespace = getClassNameWithNamespace ($namespace, $className, "/");
        echo $fullClassnameWithNamespace;
    }
}
