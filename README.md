# Mautic Twig Plugin Skeleton
This is a functioning (although basic) example of how to create a plugin for Mautic. For full docs on creating plugins for Mautic, see the [Mautic Developer Documentation](https://developer.mautic.org/#plugins).

## The basics
- Download this repo and place it in a folder within the `plugins` dir of your Mautic installation. Be sure the folder name matches the name of the bundle file in the root of this repo. (Or whatever you change it to)
- You can add as many extensions as you'd like, just be sure to add them all to the `services => other` array within the [`Config/config.php`](https://github.com/dongilbert/mautic-twig-plugin-skeleton/blob/master/Config/config.php#L12).
- After making your modifications and placing the code, clear your cache.
- Go to your plugins page in Mautic and then click `Install / Upgrade Plugins`
- You now have access to your custom twig extension in any of your templates!
