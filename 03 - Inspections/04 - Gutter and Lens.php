<?php
/**
 * 检查 - 槽和透镜
 *
 * 右边的槽显示了错误信息。使用透镜模式预览
 */

namespace Inspections4\JetBrains;

// 1. 在右手边找到错误槽。
// 2. 鼠标悬停在顶部的方块上将会得到当前文件代码质量的概览。
// 3. 悬停在一个小条纹上会看到警告或错误信息（错误代码行在可视范围）。
// 4. 悬停在一个小条纹上使用透镜模式(只有当错误代码行不在可视范围内时)
class Navigation {
    public function errorFunction() {
        echo 'First line'
        echo 'Second line';
    }

    public function warningFunction1() {
        $variable = true;
        foreach ($variable as $item) {

        }
    }

    public function warningFunction2() {
        $variable = 1;
        if ($variable = 2) {

        }
    }

    public function warningFunction3() {
        $variable = 1;
        switch ($variable) {
            case 1:
                echo 'Number one';
            case 2:
                echo 'Number two';
        }
    }

    public function deadCodeFunction1() {
        $variable = true;
    }

    public function deadCodeFunction2() {
        return true;

        if (true) {
            return false;
        }
    }

    public function spelling() {
        $mispelled = true;
    }
}
