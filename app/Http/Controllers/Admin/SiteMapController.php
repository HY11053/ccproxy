<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SiteMapController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**PC端地图生成
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Index()
    {
        ini_set("memory_limit","-1");
        $index=1;
        $appurl=config('app.url');
        $typedirs=Arctype::pluck('real_path');
        $newsurllinks=Archive::where('ismake',1)->orderBy('id','desc')->get(['id','created_at']);
        $brandlinks=Brandarticle::where('ismake',1)->orderBy('id','desc')->get(['id','created_at']);
        $mainsitemap="<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
        $urlset='<urlset>';
        $urlset2='</urlset>';
        $urlsets='';
        $lastcontents='';
        $sitemapindex='<sitemapindex>';
        $sitemapindex2='</sitemapindex>';
        $files=Storage::files('public');
        foreach ($files as $file)
        {
            if (str_contains($file,'sitemap'))
            {
                Storage::delete($file);
            }
        }
        //news地图生成
        for ($i=0;$i<count($newsurllinks);$i++)
        {
          $urlsets.="
<url>
    <loc>$appurl/news/{$newsurllinks[$i]->id}.shtml</loc>
    <lastmod>".date('Y-m-d',strtotime($newsurllinks[$i]->created_at))."</lastmod>
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
</url>
            ";
          if ($i!=0 && $i%2000==0)
          {
              $contents=$mainsitemap.$urlset.$urlsets.$urlset2;
              Storage::disk('public')->append('sitemapnews'.$index.'.xml', $contents);
              $index++;
              $urlsets='';
              $contents='';
          }elseif($i>(int)(2000*(ceil(count($newsurllinks)/2000)-1))){
              $lastcontents=$urlsets;
          }
        }
        $contents=$mainsitemap.$urlset.$lastcontents.$urlset2;
        Storage::disk('public')->append('sitemapnews'.$index.'.xml', $contents);
        $urlsets='';
        $contents='';
        $lastcontents='';
        $index=1;
        #-------------------------------------------------------------------------------------------
        for ($i=0;$i<count($brandlinks);$i++)
        {
            $urlsets.="
<url>
    <loc>$appurl/xm/{$brandlinks[$i]->id}.shtml</loc>
    <lastmod>".date('Y-m-d',strtotime($brandlinks[$i]->created_at))."</lastmod>
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
</url>
            ";
            if ($i!=0 && $i%1000==0)
            {
                $contents=$mainsitemap.$urlset.$urlsets.$urlset2;
                Storage::disk('public')->append('sitemapbrands'.$index.'.xml', $contents);
                $index++;
                $urlsets='';
                $contents='';
            }elseif($i>(int)(1000*(ceil(count($brandlinks)/1000)-1))){
                $lastcontents=$urlsets;
            }
        }
        $contents=$mainsitemap.$urlset.$lastcontents.$urlset2;
        Storage::disk('public')->append('sitemapbrands'.$index.'.xml', $contents);
        $urlsets='';
        $contents='';
        $lastcontents='';
        $index=1;
        #------------------------------------------------------------------------------------------
        foreach ($typedirs as $typedir){
    $urlsets.="
<url>
        <loc>$appurl/$typedir/</loc>
        <changefreq>daily</changefreq>                
        <priority>1.0</priority>
    </url>";
        }
        $indexurl="
    <url>
        <loc>$appurl</loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>";
        $contents=$mainsitemap.$urlset.$indexurl.$urlsets.$urlset2;
        Storage::disk('public')->append('sitemap_x.xml', $contents);
        $contents='';
        $urlsets='';
        $newfiles=Storage::files('public');
        foreach ($newfiles as $newfile)
        {
            if (str_contains($newfile,'sitemap'))
            {
                $urlsets.="
<sitemap>
    <loc>{$appurl}/storage/".str_replace('public/','',$newfile)."</loc>
    <lastmod>".date('Y-m-d',strtotime(Carbon::now()))."</lastmod>
</sitemap>
";
            }
        }
        $contents=$mainsitemap.$sitemapindex.$urlsets.$sitemapindex2;
        Storage::disk('public')->append('sitemap.xml', $contents);
        $contents='';
        $msg='XML文件生成成功';
        return view('admin.sitemapcreate',compact('msg'));
    }

    /**
     * 移动端地图生成
     * @param
     *
     * @return
     */

    function MobileSitemap()
    {
        ini_set("memory_limit","-1");
        $index=1;
        $appurl=str_replace('www.','m.',config('app.url'));
        $typedirs=Arctype::pluck('real_path');
        $newsurllinks=Archive::where('ismake',1)->orderBy('id','desc')->get(['id','created_at']);
        $brandlinks=Brandarticle::where('ismake',1)->orderBy('id','desc')->get(['id','created_at']);
        $mainsitemap="<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
        $urlset='<urlset>';
        $urlset2='</urlset>';
        $urlsets='';
        $lastcontents='';
        $sitemapindex='<sitemapindex>';
        $sitemapindex2='</sitemapindex>';
        $files=Storage::files('public');
        foreach ($files as $file)
        {
            if (str_contains($file,'mobilemap'))
            {
                Storage::delete($file);
            }
        }
        //news地图生成
        for ($i=0;$i<count($newsurllinks);$i++)
        {
            $urlsets.="
<url>
    <loc>$appurl/news/{$newsurllinks[$i]->id}.shtml</loc>
    <lastmod>".date('Y-m-d',strtotime($newsurllinks[$i]->created_at))."</lastmod>
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
</url>
            ";
            if ($i!=0 && $i%2000==0)
            {
                $contents=$mainsitemap.$urlset.$urlsets.$urlset2;
                Storage::disk('public')->append('mobilemapnews'.$index.'.xml', $contents);
                $index++;
                $urlsets='';
                $contents='';
            }elseif($i>(int)(2000*(ceil(count($newsurllinks)/2000)-1))){
                $lastcontents=$urlsets;
            }
        }
        $contents=$mainsitemap.$urlset.$lastcontents.$urlset2;
        Storage::disk('public')->append('mobilemapnews'.$index.'.xml', $contents);
        $urlsets='';
        $contents='';
        $lastcontents='';
        $index=1;
        #-------------------------------------------------------------------------------------------
        for ($i=0;$i<count($brandlinks);$i++)
        {
            $urlsets.="
<url>
    <loc>$appurl/xm/{$brandlinks[$i]->id}.shtml</loc>
    <lastmod>".date('Y-m-d',strtotime($brandlinks[$i]->created_at))."</lastmod>
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
</url>
            ";
            if ($i!=0 && $i%1000==0)
            {
                $contents=$mainsitemap.$urlset.$urlsets.$urlset2;
                Storage::disk('public')->append('mobilemapbrands'.$index.'.xml', $contents);
                $index++;
                $urlsets='';
                $contents='';
            }elseif($i>(int)(1000*(ceil(count($brandlinks)/1000)-1))){
                $lastcontents=$urlsets;
            }
        }
        $contents=$mainsitemap.$urlset.$lastcontents.$urlset2;
        Storage::disk('public')->append('mobilemapbrands'.$index.'.xml', $contents);
        $urlsets='';
        $contents='';
        $lastcontents='';
        $index=1;
        #------------------------------------------------------------------------------------------
        foreach ($typedirs as $typedir){
            $urlsets.="
<url>
        <loc>$appurl/$typedir/</loc>
        <changefreq>daily</changefreq>                
        <priority>1.0</priority>
    </url>";
        }
        $indexurl="
    <url>
        <loc>$appurl</loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>";
        $contents=$mainsitemap.$urlset.$indexurl.$urlsets.$urlset2;
        Storage::disk('public')->append('mobilemap_x.xml', $contents);
        $contents='';
        $urlsets='';
        $newfiles=Storage::files('public');
        foreach ($newfiles as $newfile)
        {
            if (str_contains($newfile,'mobilemap'))
            {
                $urlsets.="
<sitemap>
    <loc>{$appurl}/storage/".str_replace('public/','',$newfile)."</loc>
    <lastmod>".date('Y-m-d',strtotime(Carbon::now()))."</lastmod>
</sitemap>
";
            }
        }
        $contents=$mainsitemap.$sitemapindex.$urlsets.$sitemapindex2;
        Storage::disk('public')->append('mobilemap.xml', $contents);
        $contents='';
        $msg='XML文件生成成功';
        return view('admin.sitemapcreate',compact('msg'));
    }
}
